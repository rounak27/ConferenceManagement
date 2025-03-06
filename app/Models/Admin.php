<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Session;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'tbl_users'; // If admins and users are in the same table
    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function getAdminData()
{
    $id = Session::get('admin_id');
    // dd($user);
    $user = User::leftJoin('tbl_roles as r', 'tbl_users.RoleId', '=', 'r.id')
        ->select('tbl_users.*', 'r.name as RoleName')
        ->where('tbl_users.id', $id)
        ->first();
    
    return $user;
    // E25
}
protected function getDashboardStats()
{

}
}

