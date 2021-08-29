<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ArtikelStatusNotification extends Notification
{
    use Queueable;
    protected $model;
    protected $modelUser;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($model,$modelUser)
    {
        $this->model=$model;
        $this->modelUser=$modelUser;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        switch($this->model->status_acc){
            case 'accepted':
                $status = 'di terima';
                break;
            case 'rejected':
                $status = 'di tolak';
        }
        return [
            'tipeModel'=>'Artikel',
            'idModel'=>$this->model->id,
            'idUser'=>$this->modelUser->id,
            'keterangan'=>'Artikel dengan judul '.$this->model->judul.' telah '.$status,
        ];
    }
}
