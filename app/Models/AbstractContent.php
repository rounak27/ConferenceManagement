<?php

namespace App\Models;

use App\Mail\AbstractVerificationMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class AbstractContent extends Model
{
    //
    protected $table = 'tbl_abstract_contents';
    protected $fillable = ['TopicTitle', 'AbstractContent', 'UserId'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sendAbstractVerificationNotification($userData)
    {
        // dd($this->email);
        //  Mail::to($userData->email)->send(new AbstractVerificationMail($userData));
        // // dd($mail);
        // //  Mail::to($userData->email)->send(new AbstractVerificationMail($userData));
        // MailTrack::create([
        //     'user_id' => $userData->id,
        //     'email' => $userData->email,
        //     'subject' => 'Abstract Submission Successfully',
        //     'status' => 'sent',
        // ]);
        // return view('auth.verify-email');

        try {
            Mail::to($userData->email)->send(new AbstractVerificationMail($userData));
    
            // If email is sent successfully, store mail tracking
            MailTrack::create([
                'user_id' => $userData->id,
                'email' => $userData->email,
                'subject' => 'Abstract Submission Successfully',
                'status' => 'sent',
            ]);
            return true;
        } catch (TransportExceptionInterface $e) {
            // Log the error
            Log::error('Email sending failed: ' . $e->getMessage(), [
                'user_id' => $userData->id,
                'email' => $userData->email
            ]);
    
            // Store failed email attempt
            MailTrack::create([
                'user_id' => $userData->id,
                'email' => $userData->email,
                'subject' => 'Abstract Submission Successfully But Email Sending Failed',
                'status' => 'failed',
            ]);
            return false;
        }
    }
}
