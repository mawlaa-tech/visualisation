<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvocemMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {
        $this->data=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $info=$this->data;
        return $this->from('doingtech221@gmail.com')
        ->view('admin.old.mail', compact('info'))
        ->subject('La situation de votre proche est en état alert! Connecter-vous pour avoir plus details.');
    }
}
