<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AbstractContentMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($abstract)
    {
        //
        // $this->userData = $userData;
        $this->abstract = $abstract;
        // dd($this->abstract);
        // dd($this->userData, $this->abstract);
    }
    

    /**
     * Get the message envelope.
     */
   
    /**
     * Get the message content definition.
     */
    

    public function build(){
    
        $data= $this->subject('New Abstract Submission for Verification')
        // ->html('<h1>Hello, This is a static email!</h1><p>No Blade view required.</p>');
                        ->view('email.emailSend')
                        ->with([
                            'abstract'=>$this->abstract
                        ]);
        // dd($data);
        return $data;
       }
    
}
