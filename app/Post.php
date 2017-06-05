<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('id','posttitle','author', 'postcategory' ,'postlocation','postfilename','postfile_encname','type','note');
}
