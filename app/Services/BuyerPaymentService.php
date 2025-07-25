<?php

namespace App\Services;

use App\Models\BuyerInstallment;
use App\Repositories\Contracts\BuyerInstallmentRepositoryInterface;
use App\Repositories\Contracts\BuyerPaymentRepositoryInterface;
use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\Contracts\BuyerPaymentServiceInterface;
use App\Models\BuyerPayment;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class BuyerPaymentService implements BuyerPaymentServiceInterface
{
    use BaseServiceTrait;

    protected BuyerPaymentRepositoryInterface $repository;
    protected InstallmentRepositoryInterface $installmentRepository;
    protected BuyerInstallmentRepositoryInterface $buyerInstallmentRepository;
    protected ActivityLogServiceInterface $logger;

    public function __construct(BuyerPaymentRepositoryInterface $repository,
        InstallmentRepositoryInterface $installmentRepository,
        BuyerInstallmentRepositoryInterface $buyerInstallmentRepository,
        ActivityLogServiceInterface $logger)
    {
        $this->repository = $repository;
        $this->installmentRepository = $installmentRepository;
        $this->buyerInstallmentRepository = $buyerInstallmentRepository;
        $this->logger = $logger;
    }

    // Implement service methods
    public function getAllBuyerPayments(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function (){
            return $this->repository->all();
        });
    }

    public function getBuyerPaymentById(mixed $id): ?BuyerPayment
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, ["buyer", "shop", "paymentMode", "buyerInstallments"]);
        });
    }

    public function storeBuyerPayment(array $data): ?BuyerPayment
    {
        return ExceptionHandler::handle(function() use ($data){
            $buyerPayment = $this->repository->create([
                "buyer_id" => $data["buyer_id"],
                "shop_id" => $data["shop_id"],
                "payment_amount" => $data["payment_amount"],
                "payment_mode_id" => $data["payment_mode_id"],
                "payment_date" => Carbon::now(),
                "payment_ref" => $data["payment_ref"],
                "added_by" => auth("admin")->id(),
            ]);

            $paymentAmount = $data["payment_amount"];
            foreach ($data["installment_id"] as $installmentId) {
                $installment = $this->installmentRepository->findById($installmentId);
                $dueAmount = $installment->due_amount;
                $installmentPaidAmount = $paymentAmount - $dueAmount;
                $installmentDueAmount = 0;

                if ($installmentPaidAmount < 0) {
                    $installmentDueAmount = abs($installmentPaidAmount);
                }

                $this->installmentRepository->update($installmentId, [
                    "paid_amount" => $installment->paid_amount + $installmentPaidAmount,
                    "due_amount" =>  $installmentDueAmount,
                ]);

                $this->buyerInstallmentRepository->create([
                    "buyer_id" => $data["buyer_id"],
                    "buyer_payment_id" => $buyerPayment->id,
                    "installment_id" => $installmentId,
                    "payment_amount" => $data["payment_amount"],
                    "payment_mode_id" => $data["payment_mode_id"],
                    "payment_date" => Carbon::now(),
                    "payment_ref" => $data["payment_ref"],
                    "added_by" => auth("admin")->id(),
                ]);
            }

            $this->logger->log("Buyer Payment Created", ["id" => $buyerPayment->id], "buyer payment");

            return $this->getBuyerPaymentById($buyerPayment->id);

        }, null, true);
    }
}
