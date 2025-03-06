<?php

namespace App\Models;

use App\Mail\AbstractVerificationMail;
use App\Mail\VerifierMailer;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        $verifiers = DB::table('tbl_verifieremail')->pluck('email')->toArray();
        
        // dd($userData);
        try {
            // Send email to submitter
            Mail::to($userData->email)->send(new AbstractVerificationMail($userData));
            // Send email to verifiers
            Mail::to($verifiers)->send(new VerifierMailer($userData));    

            // Store mail tracking for submitter
            MailTrack::create([
                'user_id' => $userData->id,
                'email' => $userData->email,
                'subject' => 'Abstract Submission Successfully',
                'status' => 'sent',
            ]);

            // Store mail tracking for verifiers
            foreach ($verifiers as $verifierEmail) {
                MailTrack::create([
                    'user_id' => $userData->id, // Can be null if verifier is not linked to a user
                    'email' => $verifierEmail,
                    'subject' => 'New Abstract Submission for Verification',
                    'status' => 'sent',
                ]);
            }
            
            return true;
        } catch (Exception $e) {
            // Log the error
            Log::error('Email sending failed: ' . $e->getMessage(), [
                'user_id' => $userData->id,
                'email' => $userData->email
            ]);
            Log::error('Mail Error: ' . $e->getMessage());


            // Store failed email attempt for submitter
            MailTrack::create([
                'user_id' => $userData->id,
                'email' => $userData->email,
                'subject' => 'Abstract Submission Successfully But Email Sending Failed',
                'status' => 'failed',
            ]);

            // Store failed email attempts for verifiers
            foreach ($verifiers as $verifierEmail) {
                MailTrack::create([
                    'user_id' => $userData->id, // Can be null for verifiers
                    'email' => $verifierEmail,
                    'subject' => 'New Abstract Submission for Verification',
                    'status' => 'failed',
                ]);
            }

            return false;
        }
    }
    public static function getAbstracts($abstractId=null)
    {
        if($abstractId){
            $abstracts = AbstractContent::leftJoin('tbl_users', 'tbl_users.id', '=', 'tbl_abstract_contents.UserId')
            ->select(
                'tbl_abstract_contents.*', 
                DB::raw("CONCAT(tbl_users.FName, ' ', tbl_users.MName, ' ', tbl_users.LName) AS UserName"),
                'tbl_users.email AS UserEmail'
            )
            ->where('tbl_abstract_contents.IsActive', 1)
            ->where('tbl_abstract_contents.id', $abstractId)
            ->get();
        }
        else{
            $abstracts = AbstractContent::leftJoin('tbl_users', 'tbl_users.id', '=', 'tbl_abstract_contents.UserId')
            ->select(
                'tbl_abstract_contents.*', 
                DB::raw("CONCAT(tbl_users.FName, ' ', tbl_users.MName, ' ', tbl_users.LName) AS UserName"),
                'tbl_users.email AS UserEmail'
            )
            ->where('tbl_abstract_contents.IsActive', 1) // Ensure boolean is correctly checked
            ->get();
        }
        return $abstracts;
    }
}
