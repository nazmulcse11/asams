<?php

namespace App\Services;

use App\Models\AgentPayment;
use App\Notifications\AgentReserveNotification;
use App\Notifications\AgentSecurityMoneyDepositNotification;
use App\Repositories\Contracts\AgentPaymentRepositoryInterface;
use App\Services\Contracts\AgentPaymentServiceInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Notification;

class AgentPaymentService implements AgentPaymentServiceInterface
{
    use BaseServiceTrait;


    public function __construct(
        protected AgentPaymentRepositoryInterface $repository,
        protected AgentShopServiceInterface $agentShopService,
        protected PropertyServiceInterface $propertyService
    )
    {
    }

    // Implement service methods
    public function getAllAgentPayments(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () {
            if(getCurrentGuard() == 'admin') {
                return $this->repository->all(["*"], [
                    'status_id' => [
                        "!=", getStatusId("Approval", "Pending")
                    ],
                ]);
            }
            return $this->repository->all();
        });
    }

    public function getAgentPaymentById(mixed $id): ?AgentPayment
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeAgentPayment(Request $request): ?AgentPayment
    {
        return ExceptionHandler::handle(function () use ($request) {
            $data = $request->all();
            $agentShop = $this->agentShopService->getAgentShopById($request->reserve_id);
            $data['agent_id'] = $agentShop->agent_id;
            $data['shop_id'] = $agentShop->shop_id;
            $data['agent_shop_id'] = $request->reserve_id;
            $data['status_id'] = getStatusId("Approval", "Pending");
            $data['document_path'] = $request->file('document_path')->store('agent_payments/documents', 'public');
            $item = $this->repository->create($data);

            $propertyId = $item->shop?->floor?->property_id;

            $data = [
                'message' => "{$item?->agent?->username} has deposited security money for shop {$item?->shop?->number}",
                'agent_id' => $item->agent_id,
                'shop_id' => $item->shop_id,
                'agent_shop_id' => $item->agent_shop_id,
                'agent_payment_id' => $item->id,
                'block_id' => $item->shop?->block_id,
                'floor_id' => $item->shop?->floor_id,
                'property_id' => $propertyId,
                "type" => "agent"
            ];

            $property = $this->propertyService->getPropertyById($propertyId);

            Notification::send($property->employees, new AgentSecurityMoneyDepositNotification($data));

            return $item;

        });
    }

    public function verify($agentPaymentId, string $note = null)
    {
        return ExceptionHandler::handle(function () use ($agentPaymentId, $note) {
            $item = $this->getAgentPaymentById($agentPaymentId);
            $item->update([
                'status_id' => getStatusId("Approval", "Verified"),
                'employee_notes' => $note
            ]);

            $property = $this->propertyService->getPropertyById($item?->shop?->floor?->property_id);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'shop_id') == $item->shop_id &&
                    data_get($n->data, 'agent_id') == $item->agent_id &&
                    data_get($n->data, 'agent_payment_id') == $item->id &&
                    data_get($n->data, 'type') === 'agent'
                )
                ->each(fn($n) => $n->markAsRead());

            Notification::send($property->admins, new AgentSecurityMoneyDepositNotification([
                'message' => "{$item?->agent?->username} has deposited security money for shop {$item?->shop?->number} and {getCurrentAuthenticatedUser()->username} has verified the security money deposit",
                'agent_id' => $item->agent_id,
                'shop_id' => $item->shop_id,
                'agent_shop_id' => $item->agent_shop_id,
                'agent_payment_id' => $item->id,
                'block_id' => $item->shop?->block_id,
                'floor_id' => $item->shop?->floor_id,
                'property_id' => $item?->shop?->floor?->property_id,
                "type" => "agent"
            ]));

            return $item;

        }, true);
    }

    public function approve($agentPaymentId, string $note = null)
    {
        return ExceptionHandler::handle(function () use ($agentPaymentId, $note) {
            $item = $this->getAgentPaymentById($agentPaymentId);
            $item->update([
                'status_id' => getStatusId("Approval", "Approved"),
                'employee_notes' => $note
            ]);

            $item->shop->update([
                'status_id' => getStatusId("Shop", "Reserved"),
            ]);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'shop_id') == $item->shop_id &&
                    data_get($n->data, 'agent_id') == $item->agent_id &&
                    data_get($n->data, 'agent_payment_id') == $item->id &&
                    data_get($n->data, 'type') === 'agent'
                )
                ->each(fn($n) => $n->markAsRead());
            return $item;

        }, true);
    }

    public function reject($agentPaymentId, string $note = null)
    {
        return ExceptionHandler::handle(function () use ($agentPaymentId, $note) {
            $item = $this->getAgentPaymentById($agentPaymentId);
            $item->update([
                'status_id' => getStatusId("Approval", "Rejected"),
                'employee_notes' => $note
            ]);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'shop_id') == $item->shop_id &&
                    data_get($n->data, 'agent_id') == $item->agent_id &&
                    data_get($n->data, 'agent_payment_id') == $item->id &&
                    data_get($n->data, 'type') === 'agent'
                )
                ->each(fn($n) => $n->markAsRead());
            return $item;

        }, true);
    }

    public function updateAgentPayment(AgentPayment $agentPayment, array $data): AgentPayment
    {
        // TODO: Implement updateAgentPayment() method.
    }

    public function deleteAgentPayment(AgentPayment $agentPayment): bool
    {
        // TODO: Implement deleteAgentPayment() method.
    }

    public function deleteBulkAgentPayments(array $ids): bool
    {
        // TODO: Implement deleteBulkAgentPayments() method.
    }
}
