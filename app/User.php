<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\ProfileController;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'fullname', 'email','password','username','state','phonenum','verifycode','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function getProfile(){
        return ProfileController::getProfileFromUserId($this->id);
    }

    public static function getUser($id) {
        return User::find($id);
    }

    public static function getAllUsers(){
        return User::selectRaw('id,fullname,email,username')
                ->get();
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
