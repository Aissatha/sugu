<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BoutiqueAlerte extends Notification
{
    use Queueable;

    public string $message;
    public string $boutique;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        $this->message = $message;
        $this->boutique = $boutique;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    //->line('The introduction to the notification.')
                    //->action('Notification Action', url('/'))
                    //->line('Thank you for using our application!');
                    ->subject('⚠️ Alerte concernant votre boutique')
                    ->greeting("Bonjour {$notifiable->name},")
                    ->line("Vous avez reçu une alerte concernant votre boutique **{$this->boutique}**.")
                    ->line("💬 Message de l'administration :")
                    ->line("\"{$this->message}\"")
                    ->line('Merci de prendre les mesures nécessaires.')
                    ->salutation('— L’équipe SUGUBA');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
