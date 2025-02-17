<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbstractContent extends Model
{
    //
    protected $table = 'tbl_abstract_contents';
    protected $fillable = ['TopicTitle', 'AbstractContent', 'UserId'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
