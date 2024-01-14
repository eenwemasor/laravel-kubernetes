<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification
{
    use Queueable;
    
    public $user;
    public $accountType;
    public $password;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, $accountType =  null, $password = null)
    {
        $this->user = $user;
        $this->accountType = $accountType;
        $this->password = $password;
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
            ->subject("Welcome to " .env('APP_NAME')."! 🎉")
            ->view('mail.welcome', [
                'user' => $this->user, 
                'password' => $this->password, 
                'accountType' => $this->accountType
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [];
    }
}
