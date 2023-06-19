<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ChatForm extends Notification
{
    use Queueable;
    private $formData;

    /**
     * Create a new notification instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
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
        $fullName = $this->formData['name'] . ' ' . $this->formData['L_name'];

        return (new MailMessage)
            ->subject('New Chat Form Submission')
            ->line('You have received a new chat form submission.')
            ->line('Full Name: ' . $fullName)
            ->line('Email: ' . $this->formData['email'])
            ->line('Message: ' . $this->formData['message'])
            ->action('View Submission', url('/submissions'))
            ->line('Thank you for using our application!');
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'Chat Form',
            'message' => 'You have received a new chat form submission.',
            'link' => '/submissions',
            'data' => $this->formData,
        ];
    }

}
