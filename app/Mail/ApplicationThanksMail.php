<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationThanksMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->user->email)->subject('ブランド立ち上げ.comの無料相談への申し込みありがとうございます。')->view('mails.applications.thanks')->with(['user' => $this->user]);
        return $this->to("52kamikita41@gmail.com")->subject('ブランド立ち上げ.comの無料相談への申し込みがありました')->view('mails.applications.thanks')->with(['user' => $this->user]);
    }
}
