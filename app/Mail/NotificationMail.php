<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

   public function build(){ 
    return $this->subject('New Abstract Submission for Verification')
                    ->view('email.verifier_email')
                    ->with([
                        'userData' => $this->user
                    ]);                
   }
}
