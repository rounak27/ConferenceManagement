<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailTrack extends Model
{
    //
    protected $fillable = ['email', 'subject', 'status', 'user_id'];
    protected $table = 'tbl_mail_tracks';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
