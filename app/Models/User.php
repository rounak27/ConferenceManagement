<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\CustomVerificationMail;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Log;
use Mail;
use URL;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'FName',
        'LName',
        'email',
        'MobileNo',
        'Gender',
        'Country',
        'Address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'tbl_users';
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            
        ];
    }
    protected function getUserData()
    {
        $user=Auth::user();
        $userData=User::find($user->id);
        return $userData;
    }
    public function sendEmailVerificationNotification()
    {
        try{
            // dd($this->email);
            $mail = Mail::to($this->email)->send(new CustomVerificationMail($this));
            //  Mail::to($this->email)->send(new CustomVerificationMail($this));
        // dd($mail);
            MailTrack::create([
                'user_id' => $this->id,
                'email' => $this->email,
                'subject' => 'Verification Email',
                'status' => 'sent',
            ]);
            return true;
        }catch(\Exception $e){
            MailTrack::create([
                'user_id' => $this->id,
                'email' => $this->email,
                'subject' => 'Verification Email',
                'status' => 'failed',
            ]);
            Log::error('Mail Error: ' . $e->getMessage());

            return false;
        }
        // return view('auth.verify-email');
    }
    public function verificationUrl()
    {
        return URL::signedRoute('verification.verify', [
            'id' => $this->getKey(),
            'hash' => sha1($this->getEmailForVerification()),
        ]);
    }
    
}
