<?php
namespace App\Http\Controllers;
use App;
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
            ->orderBy('updated_at','desc')
            ->get();
        foreach($comments as $i => $comment){
        	$userProfile=ProfileController::getProfileFromUserId($comment->sender_id);
        	$comment->username=$userProfile->username;
        	$comment->period=$comment->comment_period;
        	$comment->period=$userProfile->avatar;
        	$comment->fullname=$userProfile->fullname;
        }
        return $comments;
    }
    public static function insertComment(Request $request){
    	$data = $request->all();
    	$post_id = $data['mark'];
    	$comment= new Comment;
    	$comment->sender_id=$data['sender_id'];
    	$comment->receiver_id=$data['receiver_id'];
    	$comment->post_id=$data['post_id'];
    	$comment->comment=$data['comment'];
    	$comment->save();
    	return $comment;
    }
}
