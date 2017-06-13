<?php
namespace App\Http\Controllers;
use JWTAuth;
use App;
use App\Adver;
use App\Feed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Advers;
use App\Http\Controllers\PostController;


class FeedController extends Controller
{
	//protected $cur_user="";
    public function __construct(){
        if(\Session::get('cur_user')==null)
            return view('home');
    }
    public function updateMark(Request $request){
        $curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $mark = new Feed;
        $mark->user_id = \Session::get('cur_user')->id;   
        $mark->post_id = $data['post_id'];
        $mark->mark = $data['mark'];

        $matchThese = ['user_id' =>$curUserId, 'post_id' => $mark->post_id];
        $curMark = Feed::where($matchThese)->get();

        //$curMark = Feed::where('user_id', '=', $mark->user_id)->get();
        if($curMark==null || $curMark->first()==null){
           $mark->save();
        }
        else{            
            $newMark=$curMark->first();
            $newMark->mark=$mark->mark;
            $newMark->save();
        }
    }

    public function getArticles(Request $request){
        if(\Session::get('cur_user')==null)
            return view('home');
            
    	//$data['feed'] = Advers::getArticles();
    	//$data['create'] = PostController::getArticles();
    	//var_dump(JWTAuth::getToken());exit(0);
    	//return Auth::check();
    	//$cur_user=app('cur_user');
    	//view()->share('cur_user',$this->$cur_user);
    	//$cur_user=\Config::get('cur_user');
    	//var_dump($cur_user);exit(0);
    	//$site_settings = app('site_settings');
    	//echo App::make('cur_user');exit(0);
    	//$cur_user=
    	//var_dump($request->data);exit(0);
        $data=PostController::getArticles();
        //$images = DB::table('tour_images')->where('tour_id','=',$tourID)->get();
        $curUserId=\Session::get('cur_user')->id;
        //var_dump($curUserId);exit(0);
        foreach($data as $i => $post){
            
            $matchThese = ['user_id' =>$curUserId, 'post_id' => $post->id];
            $curMark = Feed::where($matchThese)->get();

            if($curMark==null){
               $data[$i]->mark = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($curMark->first())
                    $data[$i]->mark = $curMark->first()->mark;
                else
                    $data[$i]->mark='0';
            }
        }
        return view('feed')->with('articles',$data);
    }
}
