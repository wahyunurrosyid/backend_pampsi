<?php

namespace App\Notifications;

use App\Jobs\PushNotificationJob;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RequestConnectionFriend extends Notification
{
    use Queueable;
    protected $idPengirim;
    protected $namaPengirim;
    protected $tipeModel;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($idPengirim)
    {
        $find = User::find($idPengirim);
        $this->idPengirim = $find->id;
        $this->namaPengirim = $find->nama_lengkap;
        $this->tipeModel = 'Connection';
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
                    ->line(''.$this->namaPengirim.' telah meminta koneksi pertemanan')
                    ->line('Silahkan cek permintaan koneksi pertemanan anda!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $title = 'Request Connection Notification';
        $value = 'Your account has a new connection request';
        dispatch(new PushNotificationJob($notifiable->id,$title,$value));
        return [
            'tipeModel'=>$this->tipeModel,
            'idModel'=>$this->idPengirim,
            'idUser'=>$this->idPengirim,
            'keterangan'=>''.$this->namaPengirim.' telah meminta koneksi pertemanan'
        ];
    }
}
