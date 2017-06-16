<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = array('id', 'fullname', 'email','password','username','state','phonenum','verifycode','avatar');
}
