<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
    	$curUserId=\Session::get('cur_user')->id;
        $data = $request->all();
        $profile = new Profile;
        $profile->user_id = $curUserId;   
        $profile->avatar = $data['avatar'];
        $profile->description = $data['description'];
        $profile->birthYear = $data['birthYear'];
        $profile->birthMonth = $data['birthMonth'];
        $profile->birthDate = $data['birthDate'];
        $profile->location = $data['location'];
        $curProfile=$this->getProfile();
        
        	$curProfile->user_id = $curUserId;   
	        $curProfile->avatar = $data['avatar'];
	        $curProfile->description = $data['description'];    
	        $curProfile->birthYear = $data['birthYear'];
	        $curProfile->birthMonth = $data['birthMonth'];
	        $curProfile->birthDate = $data['birthDate'];
	        $curProfile->location = $data['location'];
	        $curProfile->save();
        return $profile;
    }
    public static function getProfile(){
    	$curUserId=\Session::get('cur_user')->id;
    	$matchThese = ['user_id' =>$curUserId];
        $curProfile = Profile::where($matchThese)->get();
        if($curProfile==null || $curProfile->first()==null){
        	$curProfile=new Profile;
        }
        else{
        	$curProfile=$curProfile->first();
        }
        \Session::set('cur_user_profile',$curProfile);
        return $curProfile;
    }
    public static function getProfileFromUserId($user_id){  
        $matchThese = ['user_id' =>$user_id];
        $curProfile = Profile::where($matchThese)->get();
        $profile = new Profile;
        
        if($curProfile==null || $curProfile->first()==null){
            $curProfile=new Profile;
        }
        else{
            $curProfile=$curProfile->first();
        }
        return $curProfile;
    }
    public function avatar_upload(Request $request){
        $fileInfo="";
    	if ($request->hasFile('video')) {
            $file = $request->video;
            $id = str_random(20);
            $fileInfo=$id.".".$file->getClientOriginalExtension();
            Storage::disk('local')->put("/avatar/".$fileInfo, file_get_contents($file->getRealPath()));
            //Storage::disk('public')->put($file->name, $file->content);
            //$path = $request->video->store('public/uploads');
            //$fileInfo=basename($path);
        }
        echo $fileInfo;
    }
}
