<?php

namespace App\Services;

use App\Models\Buyer;
use App\Notifications\AgentSecurityMoneyDepositNotification;
use App\Notifications\BuyerEnrollmentNotification;
use App\Repositories\Contracts\BuyerRepositoryInterface;
use App\Services\Contracts\BuyerServiceInterface;
use App\Utils\ExceptionHandler;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class BuyerService implements Contracts\BuyerServiceInterface
{

    protected BuyerRepositoryInterface $repository;
    protected MediaService $mediaService;

    public function __construct(BuyerRepositoryInterface $repository, MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
        $this->repository = $repository;
    }

    public function getAllBuyers(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function (){
            return $this->repository->all();
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getDataTableData($request);

            $this->columns($agents);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    protected function columns($companies): void
    {
        $companies->getCollection()->transform(function ($company) {
            $company->description = Str::limit($company->description, 50); // Limit description to 100 characters
            return $company;
        });
    }

    public function getBuyerById(mixed $id): ?Buyer
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeBuyer(array $data): ?Buyer
    {
        return ExceptionHandler::handle(function () use ($data) {
            switch (getCurrentGuard()) {
                case "employee":
                case "admin":
                    $data["status_id"] = getStatusId("Buyer", "Approved");
                    break;
                default:
                    $data["status_id"] = getStatusId("Buyer", "Pending");
                    break;
            }

            $data["password"] = bcrypt($data["password"]);

            $item = $this->repository->create($data);
            $item->addresses()->create($data);
            $profile = $item->profile()->create($data);

            if(isset($data["picture"])) {
                $this->mediaService->uploadMedia($profile, $data["picture"], "picture");
            }

            if(isset($data["nid_copy"])) {
                $this->mediaService->uploadMedia($profile, $data["nid_copy"], "nid_copy");
            }

            switch ($item->status?->name) {
                case "Pending":
                    Notification::send(getCurrentProperty()->employees, new BuyerEnrollmentNotification([
                        "message" => "A Buyer has enrolled by " . getCurrentAuthenticatedUser()->username,
                        "buyer_id" => $item->id,
                        "property_id" => getCurrentProperty()->id,
                        "type" => "buyer"
                    ]));
                    break;
                case "Verified":
                    Notification::send(getCurrentProperty()->admins, new BuyerEnrollmentNotification([
                        "message" => "A Buyer has enrolled by " . $item->agent?->username . " and has been verified by " . getCurrentAuthenticatedUser()->username,
                        "buyer_id" => $item->id,
                        "property_id" => getCurrentProperty()->id,
                        "type" => "buyer"
                    ]));
                    break;
            }

            return $item;
        }, null, true);
    }

    public function approveBuyer(Buyer $buyer)
    {
        return ExceptionHandler::handle(function () use ($buyer) {
            $buyer->update([
                'status_id' => getStatusId("buyer", "Approved"),
            ]);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'title') == "New Buyer Enrolled" &&
                    data_get($n->data, 'type') === 'buyer'
                )
                ->each(fn($n) => $n->markAsRead());
            return $buyer;

        }, true);
    }

    public function rejectBuyer(Buyer $buyer)
    {
        return ExceptionHandler::handle(function () use ($buyer) {
            $buyer->update([
                'status_id' => getStatusId("buyer", "Rejected"),
            ]);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'title') == "New Buyer Enrolled" &&
                    data_get($n->data, 'type') === 'buyer'
                )
                ->each(fn($n) => $n->markAsRead());
            return $buyer;

        }, true);
    }

    public function updateBuyer(Buyer $buyer, array $data): Buyer
    {
        return ExceptionHandler::handle(function () use ($buyer, $data) {
            return $this->repository->update($buyer->id, $data);

        }, $buyer, true);
    }

    public function bought(mixed $buyer_id): int
    {
        return ExceptionHandler::handle(function () use ($buyer_id) {
            return $this
                ->repository
                ->getModel()
                ->join("buyer_shops", "buyers.id", "=", "buyer_shops.buyer_id")
                ->where("buyer_shops.buyer_id", $buyer_id)
                ->count()
            ;
        }, 0);
    }

    public function leased(mixed $buyer_id): int
    {
        return ExceptionHandler::handle(function () use ($buyer_id) {
            return $this
                ->repository
                ->getModel()
                ->join("buyer_shops", "buyers.id", "=", "buyer_shops.buyer_id")
                ->join("status", "buyer_shops.status_id", "=", "statuses.id")
                ->where("buyer_shops.buyer_id", $buyer_id)
                ->where("statuses.name", "Leased")
                ->count()
            ;
        }, 0);
    }

    public function total_payments(mixed $buyer_id): int
    {
        return ExceptionHandler::handle(function () use ($buyer_id) {
            return $this
                ->repository
                ->getModel()
                ->join("buyer_payments", "buyers.id", "=", "buyer_payments.buyer_id")
                ->sum("buyer_payments.payment_amount")
            ;
        }, 0);
    }

    public function deleteBuyer(Buyer $buyer): bool
    {
        return ExceptionHandler::handle(function () use ($buyer) {
            return $this->repository->delete($buyer);
        }, false, true);
    }

    public function deleteBulkBuyers(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        }, false, true);
    }
}
