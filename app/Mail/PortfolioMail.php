<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PortfolioMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $name;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$msg)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->msg= $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('eslam.muhammed.saeed@gmail.com')
                 ->from('eslamsaeed4444@gmail.com')
                ->markdown('emails.portfolio')
                ->with([
                    'SenderEmail' => $this->email,
                    'SenderName' => $this->name,
                    'SenderMsg' => $this->msg,
                    
                ]);
    }
    // public function build()
    // {
    //     return $this->markdown('emails.portfolio');
    // }
}
