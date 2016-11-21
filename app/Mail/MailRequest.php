<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $name;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender,$name,$content)
    {
        $this->sender = $sender;
        $this->name = $name;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mail')
            ->from($this->sender, $this->name)
            ->subject("Bussines Center - contact");
    }
}
