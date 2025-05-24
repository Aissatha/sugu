<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NouvelleDemandeBoutique extends Notification
{
    use Queueable;
    public $shop;

    /**
     * Create a new notification instance.
     */
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Nouvelle demande de boutique')
            ->greeting('Bonjour Admin,')
            ->line('Une nouvelle demande de boutique a été soumise.')
            ->line('Nom: ' . $this->shop->nom)
            ->action('Voir la demande', route('admin.shops.show', $this->shop->id));

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Nouvelle demande de boutique',
            'message' => 'La boutique "' . $this->shop->nom . '" a été soumise.',
            'url' => route('admin.shops.show', $this->shop->id),

        ];
    }
}
