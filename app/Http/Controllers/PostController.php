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
        $blog = new Post;
        $blog->title = $data['title'];   
        $blog->author = $data['author'];
        $blog->user_id = \Session::get('cur_user')->id;
        $blog->content = $data['content'];    
        $blog->category = $data['category'];
        $blog->location = $data['location'];
        $blog->price = $data['price'];
        $blog->filename = $data['filename'];
        $blog->file_encname = $data['file_encname'];
        $blog->type = $data['type'];
        $blog->note = $data['note'];
        $blog->filetype = $data['filetype'];
        $blog->save();
        //return $data['filetype'];
        return Post::find($blog->id);
    }
    public static function getArticles(){
        return Post::selectRaw('*,HOUR(TIMEDIFF(NOW(),updated_at)) as article_period')
                ->orderBy('updated_at','desc')
                ->get();
    }
    public function video_upload(Request $request){
        $fileInfo="";
        $file=null;
        if($request->hasFile('video')){
            $file = $request->video;
        }else if($request->hasFile('file')){
            $file = $request->file;
        }
    	if ($file) {
            $id = str_random(20);
            $fileInfo=$id.".".$file->getClientOriginalExtension();
            Storage::disk('local')->put($fileInfo, file_get_contents($file->getRealPath()));
            //Storage::disk('public')->put($file->name, $file->content);
            //$path = $request->video->store('public/uploads');
            //$fileInfo=basename($path);
        }
        
        echo $fileInfo;
    }
    public function dragupload(Request $request){

    }

}
