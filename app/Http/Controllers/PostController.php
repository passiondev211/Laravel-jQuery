<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->all();
        $post = new Post;
        $post->posttitle = $data['posttitle'];   
        $post->author = $data['author'];    
        $post->postcategory = $data['postcategory'];       
        $post->postlocation = $data['postlocation'];
        $post->postfilename = $data['postfilename'];
        $post->postfile_encname = $data['postfile_encname'];
        $post->type = $data['type'];
        $post->note = $data['note'];
        $post->save();
        return Post::find($post->id);
    }
    public static function getArticles(){
        return Post::selectRaw('*,DATEDIFF(NOW(),updated_at) as article_period')
                ->orderBy('updated_at','desc')
                ->get();
    }
    public function video_upload(Request $request){
        $fileInfo="";
    	if ($request->hasFile('video')) {
            $file = $request->video;
            $id = str_random(20);
            $fileInfo=$id.".".$file->getClientOriginalExtension();
            Storage::disk('local')->put($fileInfo, file_get_contents($file->getRealPath()));
            //Storage::disk('public')->put($file->name, $file->content);
            //$path = $request->video->store('public/uploads');
            //$fileInfo=basename($path);
        }
        echo $fileInfo;
    }

}
