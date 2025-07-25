<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AgentSecurityMoneyDepositNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        protected array $data
    )
    {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Shop security money deposit',
            'message' => $this->data['message'] ?? 'An agent has deposited security money.',
            'agent_id' => $this->data['agent_id'] ?? null,
            'shop_id' => $this->data['shop_id'] ?? null,
            'agent_shop_id' => $this->data['agent_shop_id'] ?? null,
            'agent_payment_id' => $this->data['agent_payment_id'] ?? null,
            'block_id' => $this->data['block_id'] ?? null,
            'floor_id' => $this->data['floor_id'] ?? null,
            'property_id' => $this->data['property_id'] ?? null,
            'tag' => "agent_shop_security_deposit",
            'type' => "agent",
            'notified_at' => now(),
        ];
    }
}
