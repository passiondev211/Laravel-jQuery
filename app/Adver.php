<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adver extends Model
{
    protected $fillable = array('id','title','author','content','location','type','note');
}
