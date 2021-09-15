<?php

namespace App\Notifications;

use App\Jobs\PushNotificationJob;
use App\Models\TokenFcm;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConnectionAccepted extends Notification
{
    use Queueable;

    protected $idPenerima;
    protected $namaPenerima;
    protected $tipeModel;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($idFirstUser)
    {
        $find = User::where('id',$idFirstUser)->first();
        $this->idPenerima = $find->id;
        $this->namaPenerima = $find->nama_lengkap;
        $this->tipeModel = 'Connection';

        $title = 'Connection Accepted';
        $value = 'Your account have been accepted connection';
        dispatch(new PushNotificationJob($find->id,$title,$value));
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
                    ->line(''.$this->namaPenerima.' telah menerima permintaan pertemanan anda.')
                    ->line('Silahkan cek pertemanan anda!');
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
            'tipeModel'=>$this->tipeModel,
            'idModel'=>$this->idPenerima,
            'idUser'=>$this->idPenerima,
            'keterangan'=>''.$this->namaPenerima.' telah menerima permintaan pertemanan anda.'
        ];
    }
}
