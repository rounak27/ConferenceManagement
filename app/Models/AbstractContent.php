<?php

namespace App\Models;

use App\Mail\AbstractVerificationMail;
use Illuminate\Database\Eloquent\Model;
use Mail;

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
        Mail::to($userData->email)->send(new AbstractVerificationMail($userData));
        MailTrack::create([
            'user_id' => $userData->id,
            'email' => $userData->email,
            'subject' => 'Abstract Submission Successfully',
            'status' => 'sent',
        ]);
        // return view('auth.verify-email');
    }
}
