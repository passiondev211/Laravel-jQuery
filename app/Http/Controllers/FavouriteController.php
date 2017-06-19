<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FavouriteController extends Controller
{
    public function __construct(){
        if(\Session::get('cur_user')==null)
            return view('home');
    }
    public function updateFavourite(Request $request){
        $curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $favourite = new Favourite;
        $favourite->liker_id = \Session::get('cur_user')->id;   
        $favourite->post_id = $data['post_id'];
        $favourite->like = $data['favourite'];

        $matchThese = ['liker_id' =>$curUserId, 'post_id' => $favourite->post_id];
        $curfavourite = Favourite::where($matchThese)->get();
        if($curfavourite==null || $curfavourite->first()==null){
           $favourite->save();
        }
        else{
            $newfavourite=$curfavourite->first();
            $newfavourite->like=$favourite->like;
            $newfavourite->save();
        }
    }
}
