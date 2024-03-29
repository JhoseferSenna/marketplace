<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
// use Illuminate\Notifications\Messages\NexmoMessage;

class StoreReceiveNewOrder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //, 'nexmo'
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Novo Pedido')
            ->greeting('Olá¡ vendedor, tudo bem?')
            ->line('Você recebeu um novo pedido na sua loja')
            ->action('Ver pedido', url("admin.orders.my"));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => 'Você têm um novo pedido solicitado'
        ];
    }

    // public function toNexmo($notifiable)
    // {

    //     return (new NexmoMessage)
    //         ->content('VocÃª recebeu um novo pedido em nosso site')
    //         ->from('5522997640769');
    // }
}
