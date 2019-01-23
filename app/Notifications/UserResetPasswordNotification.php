<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Config;
use CommonHelper;
class UserResetPasswordNotification extends Notification
{
    use Queueable;
    
    public $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //echo $this->token."<br>";
       //$this->token = $this->token."::".$notifiable->constacl_single_users_email;
       $this->token = CommonHelper::encrip_password($this->token,"e");
       $this->token .= "::".CommonHelper::encrip_password($notifiable->constacl_single_users_email,"e");
       //echo $notifiable->constacl_single_users_email."<br>";
       dd($this->token);
        return (new MailMessage)
                    ->line('Your password reset request has been accepted. Please click on below button for further action.')
                    ->action('Reset Password', route('password.reset', [$this->token]))
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
        return [
            //
        ];
    }
}
