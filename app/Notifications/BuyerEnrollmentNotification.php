<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BuyerEnrollmentNotification extends Notification
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

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database']; // You can also use ['mail', 'broadcast'] etc.
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Buyer Enrolled',
            'message' => $this->data['message'] ?? 'A Buyer has enrolled.',
            'buyer_id' => $this->data['buyer_id'] ?? null,
            'agent_id' => $this->data['agent_id'] ?? null,
            'property_id' => $this->data['property_id'] ?? null,
            "tag" => "buyer_enrollment",
            'type' => "buyer",
            'notified_at' => now(),
        ];
    }
}
