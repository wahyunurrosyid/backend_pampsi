<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as Notif;
use App\Models\TokenFcm;

class CommentNotification extends Notification
{
    use Queueable;
    protected $idPenulis;
    protected $judul;
    protected $idModel;
    protected $namaModel;
    protected $model;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($idPenulis,$judul,$idModel,$namaModel,$model)
    {
        $find=User::find($idPenulis);
        $this->idPenulis=$idPenulis;
        $this->judul=$judul;
        $this->idModel=$idModel;
        $this->namaModel=$namaModel;
        $this->model=$model;

        // $getToken = TokenFcm::where('user_id',$idPenulis)->first();
        // if(!is_null($getToken)){
        //     $factory = (new Factory)->withServiceAccount(base_path() . env('PATH_FIRE_JSON'));
        //     $messaging = $factory->createMessaging();
        //     $message = CloudMessage::withTarget('token', $getToken->token)
        //         ->withNotification(Notif::create('Comment Notification','Your article has new comments'))
        //         ;
        //     $report = $messaging->send($message);
        // }
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
                    ->line($this->namaModel.' '.$this->judul.' mempunyai komentar baru')
                    ->line('Silahkan cek artikel anda!');
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
            'tipeModel'=>$this->model,
            'idModel'=>$this->idModel,
            'idUser'=>$this->idPenulis,
            'keterangan'=>$this->model.' '.$this->judul.' mempunyai komentar baru'
        ];
    }
}
