<?php

namespace App\Notifications;

use App\Models\BuyerShop;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class BuyerSaleRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        protected BuyerShop $buyerShop,
        protected array $data = []
    )
    {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Shop Sale Request',
            'message' => $this->data['message'] ?? "Buyer '" . getUserName($this->buyerShop?->buyer) . "' has sent a sale request for shop '" . $this->buyerShop->shop->number . "' via agent '" . getUserName($this->buyerShop?->agent) . "'",
            'buyer_id' => $this->data['buyer_id'] ?? $this->buyerShop?->buyer_id,
            'shop_id' => $this->data['shop_id'] ?? $this->buyerShop?->shop_id,
            'agent_shop_id' => $this->data['agent_shop_id'] ?? $this->buyerShop?->agent_shop_id,
            'agent_id' => $this->data['agent_id'] ?? $this->buyerShop?->agent_id,
            'buyer_shop_id' => $this->data['buyer_shop_id'] ?? $this->buyerShop?->id,
            'block_id' => $this->data['block_id'] ?? $this->buyerShop?->shop?->block_id,
            'floor_id' => $this->data['floor_id'] ?? $this->buyerShop?->shop?->floor_id,
            'property_id' => $this->data['property_id'] ?? $this->buyerShop?->shop?->floor?->property_id,
            "tag" => "buyer_sale_request",
            'type' => "buyer",
            'notified_at' => now(),
        ];
    }
}
