<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCreate extends Model
{
    protected $fillable = array('id','title','author', 'category' ,'location','filename','file_encname','type','note');
}
