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
    $user = Auth::user();

    $userData = User::leftJoin('tbl_member_types', 'tbl_member_types.id', '=', 'tbl_users.MemberType')
        ->select('tbl_users.*', 'tbl_member_types.name as MemberTypeName')
        ->where('tbl_users.id', $user->id) // Make sure we filter by the current user
        ->first(); // Use first() to fetch a single result for the logged-in user
    
    return $userData;
}
    protected function getUserDataFromUserId($userId=0)
    {
        if($userId==0){
            $user = User::all()
            ->where('RoleId', '!=', 1);
            
        }else{
            $user = User::where('id',$userId)
            ->where('RoleId', '!=', 1)
            ->first();
        }
        return $user;
    }
    protected function getUserDataWithDocumentFromUserId($userId = 0)
{
    $query = User::leftJoin('tbl_documents', 'tbl_documents.user_id', '=', 'tbl_users.id')
        ->leftJoin('tbl_member_types', 'tbl_member_types.id', '=', 'tbl_users.MemberType')
        ->where('tbl_users.RoleId', '!=', 1)
        ->select('tbl_users.*', 'tbl_documents.id as DocumentId','tbl_documents.payment_document','tbl_documents.medical_letter_document', 'tbl_member_types.name as MemberTypeName'); // Select required fields

    if ($userId != 0) {
        return $query->where('tbl_users.id', $userId)->first(); // Fetch a single record
    }

    return $query->get(); // Fetch all records
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
    public function role()
    {
        return $this->belongsTo(Role::class, 'RoleId');
    }

    public function isAdmin()
    {
        return $this->RoleId == 1; // Assuming 1 = Admin
    }

    public function isAccountant()
    {
        return $this->RoleId == 3; // Assuming 3 = Accountant
    }
    
}
