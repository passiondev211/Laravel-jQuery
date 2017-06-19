<?php
namespace App\Http\Controllers;
use App;
use App\Favourite;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;

class CommentController extends Controller
{
    public static function getComments($post_id){
    	$comments = Comment::selectRaw('*,HOUR(TIMEDIFF(NOW(),updated_at)) as comment_period')
            ->where('post_id',$post_id)
            ->orderBy('updated_at','asc')
            ->get();
        foreach($comments as $i => $comment){
            $curUserId=\Session::get('cur_user')->id;
            $userProfile=ProfileController::getProfileFromUserId($comment->sender_id);
        	//$comment->username=$userProfile->username;
        	$comment->period=$comment->comment_period;
            $comment->author=$userProfile;

            $allFavourites = Favourite::selectRaw('sum(like_) as sumfavourite')
            ->where('post_id',$comment->id)
            ->get();
            if($allFavourites==null){
               $comment->favourite_count = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($allFavourites->first() && $allFavourites->first()->sumfavourite!=null && $allFavourites->first()->sumfavourite!='null')
                    $comment->favourite_count = $allFavourites->first()->sumfavourite;
                else
                    $comment->favourite_count='0';
            }

            $matchThese = ['user_id' =>$curUserId, 'post_id' => $comment->id];
            $curFavourite = Favourite::where($matchThese)->get();
            if($curFavourite==null){
               $comment->favourite = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($curFavourite->first())
                    $comment->favourite = $curFavourite->first()->like_;
                else
                    $comment->favourite = '0';
            }
        }
        return $comments;
    }
    
    public static function getLatestComment($post_id){
        $comment = Comment::selectRaw('*,HOUR(TIMEDIFF(NOW(),updated_at)) as comment_period')
            ->where('post_id',$post_id)
            ->orderBy('id','desc')
            ->first();
        if($comment!=null){
            $curUserId=\Session::get('cur_user')->id;
            $userProfile=ProfileController::getProfileFromUserId($comment->sender_id);
            //$comment->username=$userProfile->username;
            $comment->period=$comment->comment_period;
            $comment->author=$userProfile;

            $allFavourites = Favourite::selectRaw('sum(like_) as sumfavourite')
            ->where('post_id',$comment->id)
            ->get();
            if($allFavourites==null){
               $comment->favourite_count = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($allFavourites->first() && $allFavourites->first()->sumfavourite!=null && $allFavourites->first()->sumfavourite!='null')
                    $comment->favourite_count = $allFavourites->first()->sumfavourite;
                else
                    $comment->favourite_count='0';
            }

            $matchThese = ['user_id' =>$curUserId, 'post_id' => $comment->id];
            $curFavourite = Favourite::where($matchThese)->get();
            if($curFavourite==null){
               $comment->favourite = '0';
            }
            else{
                //$newMark=$curMark->first();
                //$newMark->mark=$mark->mark;
                if($curFavourite->first())
                    $comment->favourite = $curFavourite->first()->like_;
                else
                    $comment->favourite = '0';
            }
        }
        return $comment;
    }
    public static function insertComment(Request $request){
    	$data = $request->all();
    	$comment= new Comment;
    	$comment->sender_id=$data['sender_id'];
    	$comment->receiver_id=$data['receiver_id'];
    	$comment->post_id=$data['post_id'];
    	$comment->content=$data['content'];
    	$comment->save();
    	return $comment;
    }
}
