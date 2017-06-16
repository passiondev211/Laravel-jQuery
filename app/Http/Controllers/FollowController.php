<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

class FollowController extends Controller
{
    //protected $cur_user="";
    public function __construct(){
        if(\Session::get('cur_user')==null)
            return view('home');
    }
    public $otherUsers;
    public function showOtherUsers(){
    	$otherUsers = User::getAllUsers();
    	//var_dump($otherUsers->first()->fullname);exit(0);
    	return view('verification3_4')->with('otherUsers',$otherUsers);
    }    

}
