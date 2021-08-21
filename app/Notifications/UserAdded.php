<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Crypt;

class UserAdded extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;
    protected $no_hash;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($no_hash)
    {
        $this->no_hash = $no_hash;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
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
        $id = Crypt::encrypt($notifiable->id);
        return (new MailMessage)
                ->greeting('Halo '.$notifiable->username."!")
                ->line('Akun anda telah selesai dibuat,')
                ->line('Kami hanya perlu memverifikasi alamat email Anda')
                ->line('untuk menyelesaikan pendaftaran.')
                ->action('Verifikasi Email Anda', url('auth/verifikasi/'.$id))
                ->line('username: '.$notifiable->username)
                ->line('password: '.$this->no_hash);
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
            'nama' => $notifiable->username
        ];
    }
}
