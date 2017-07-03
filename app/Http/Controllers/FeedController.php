<?php
namespace App\Http\Controllers;
use JWTAuth;
use App;
use App\Adver;
use App\Feed;
use App\Like;
use App\Favourite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Advers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


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

    public function updateLike(Request $request){
        $curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $like = new Like;
        $like->user_id = \Session::get('cur_user')->id;   
        $like->post_id = $data['post_id'];
        $like->like_ = $data['like_'];

        $matchThese = ['user_id' =>$curUserId, 'post_id' => $like->post_id];
        $curlike = Like::where($matchThese)->get();

        //$curlike = Like::where('user_id', '=', $like->user_id)->get();
        if($curlike==null || $curlike->first()==null){
           $like->save();
        }
        else{            
            $newlike=$curlike->first();
            $newlike->like_=$like->like_;
            $newlike->save();
        }
    }

    public function updateFavourite(Request $request){
        $curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $favourite = new Favourite;
        $favourite->user_id = $curUserId;
        $favourite->post_id = $data['post_id'];
        $favourite->like_ = $data['like_'];

        $matchThese = ['user_id' =>$curUserId, 'post_id' => $favourite->post_id];
        $curfavourite = Favourite::where($matchThese)->get();

        //$curfavourite = Like::where('user_id', '=', $favourite->user_id)->get();
        if($curfavourite==null || $curfavourite->first()==null){
           $favourite->save();
        }
        else{            
            $newfavourite=$curfavourite->first();
            $newfavourite->like_=$favourite->like_;
            $newfavourite->save();
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
            $avgMark = Feed::where('post_id', $post->id)->avg('mark');
            //$cntMark = Feed::where('post_id' ,$post->id)->count();
            //$sumMark = Feed::where('post_id' ,$post->id)->sum('mark');
                        
            
            $data[$i]->mark=intval($avgMark);
            //if($cntMark>0){
              //  $data[$i]->mark = $t_sum/$cnt;
            //}

            $allLike = Like::selectRaw('sum(like_) as sumlike')
            ->where('post_id',$post->id)
            ->get();
            if($allLike==null){
               $data[$i]->like_count = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($allLike->first() && $allLike->first()->sumlike!=null && $allLike->first()->sumlike!='null')
                    $data[$i]->like_count = $allLike->first()->sumlike;
                else
                    $data[$i]->like_count='0';
            }


            $curLike = Like::where($matchThese)->get();

            if($curLike==null){
               $data[$i]->like = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($curLike->first())
                    $data[$i]->like = $curLike->first()->like_;
                else
                    $data[$i]->like = '0';
            }
            $data[$i]->comments=CommentController::getComments($post->id);
            $data[$i]->latestComment=CommentController::getLatestComment($post->id);
            $data[$i]->authorProfile = ProfileController::getProfileFromUserId($post->user_id);
        }
        return view('feed')->with('articles',$data);
    }
}
