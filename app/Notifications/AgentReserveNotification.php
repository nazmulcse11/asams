<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class AgentReserveNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        protected array $data
    )
    {
    }

    public function via($notifiable)
    {
        return ['database']; // You can also use ['mail', 'broadcast'] etc.
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Shop Reservation',
            'message' => $this->data['message'] ?? 'An agent has reserved a shop.',
            'agent_id' => $this->data['agent_id'] ?? null,
            'shop_id' => $this->data['shop_id'] ?? null,
            'agent_shop_id' => $this->data['agent_shop_id'] ?? null,
            'block_id' => $this->data['block_id'] ?? null,
            'floor_id' => $this->data['floor_id'] ?? null,
            'property_id' => $this->data['property_id'] ?? null,
            'tag' => "agent_shop_reserve",
            'type' => "agent",
            'notified_at' => now(),
        ];
    }
}
