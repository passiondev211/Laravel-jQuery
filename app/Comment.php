<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array('id','sender_id','receiver_id','post_id','mark');
}
