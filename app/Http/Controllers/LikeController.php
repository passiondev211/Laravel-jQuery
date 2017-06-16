<?php

namespace App\Http\Controllers;
use JWTAuth;
use App;
use App\Adver;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Advers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

class LikeController extends Controller
{
    public function __construct(){
        if(\Session::get('cur_user')==null)
            return view('home');
    }
    public function updateLike(Request $request){
        $curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $like = new Like;
        $like->liker_id = \Session::get('cur_user')->id;   
        $like->post_id = $data['post_id'];
        $like->like = $data['like'];

        $matchThese = ['liker_id' =>$curUserId, 'post_id' => $like->post_id];
        $curlike = Like::where($matchThese)->get();
        if($curlike==null || $curlike->first()==null){
           $like->save();
        }
        else{
            $newlike=$curlike->first();
            $newlike->like=$like->like;
            $newlike->save();
        }
    }
}
