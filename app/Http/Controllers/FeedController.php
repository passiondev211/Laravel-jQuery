<?php
namespace App\Http\Controllers;
use App\Adver;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Advers;
use App\Http\Controllers\PostController;

class FeedController extends Controller
{
    public function getArticles(){
    	$data['feed'] = Advers::getArticles();
    	$data['create'] = PostController::getArticles();
    	return view('feed')->with('articles',$data);
    }
}
