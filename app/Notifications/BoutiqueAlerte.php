<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class BoutiqueAlerte extends Notification
{
    use Queueable;

    public string $message;
    public string $boutique;

    public function __construct(string $message, string $boutique)
    {
        $this->message = $message;
        $this->boutique = $boutique;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database']; // Tu peux ajouter 'database' ici
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('⚠️ Alerte concernant votre boutique')
            ->greeting("Bonjour {$notifiable->name},")
            ->line("Vous avez reçu une alerte concernant votre boutique **{$this->boutique}**.")
            ->line("💬 Message de l'administration :")
            ->line("\"{$this->message}\"")
            ->line('Merci de prendre les mesures nécessaires.')
            ->salutation('— L’équipe SUGUBA');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Alerte boutique',
            'message' => $this->message,
            'boutique' => $this->boutique,
        ];
    }
}
