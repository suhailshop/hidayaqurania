<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class notifications extends Mailable
{
    use Queueable, SerializesModels;
    public $email,$subject,$text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$subject,$text)
    {
        $this->email = $email;
        $this->subject= $subject;
        $this->text= $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address =$this->email;
        $name = 'HIDAYA QURANIA';
        $subject = $this->subject;
    
        return $this->view('portal.admin.email.template')
                    ->from($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)->with('text',$this->text);
    }
}
