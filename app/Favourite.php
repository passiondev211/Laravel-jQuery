<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = array('id','user_id','post_id','like_');
}
