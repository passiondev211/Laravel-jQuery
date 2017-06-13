<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App;
use View;
use App\Http\Controllers\ProfileController;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        //var_dump($request);
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    public static function getAuthenticatedUser()
	{
        //var_dump(JWTAuth::parseToken()->authenticate());exit(0);
	    try {

	        if (! $user = JWTAuth::parseToken()->authenticate()) {
	            return response()->json(['user_not_found'], 404);
	        }

	    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

	        return response()->json(['token_expired'], $e->getStatusCode());

	    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

	        return response()->json(['token_invalid'], $e->getStatusCode());

	    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

	        return response()->json(['token_absent'], $e->getStatusCode());

	    }

        \Session::set('cur_user', $user);
        ProfileController::getProfile();
        //public static $cur_user=compact('user');
        //\App::singleton('cur_user',$user->fullname);
        //View::share('cur_user',"sdfsdf");
        //View::share('cur_user',$user);
        //var_dump(JWTAuth::user());
        // \App::singleton('cur_user', function(){
        //     return compact('user');
        // });
        //var_dump(App::make('cur_user'));exit(0);
        //\Config::set('cur_user', "ddd");
        //
        //view()->share('cur_user',$cur_user);
        //\View::share('cur_user',$cur_user);
	    // the token is valid and we have found the user via the sub claim
        
	    return response()->json(compact('user'));
	}
    public function logout(){
        \Session::clear();
        return view('/home');
    }
	public function register(Request $request){ 
        $newuser= $request->all();
        $password=Hash::make($request->input('password'));
        $newuser['password'] = $password;

        $fullname=$request->input('fullname');
        $email=$request->input('email');
        $username=$request->input('username');
        $state=$request->input('state');
        $phonenum=$request->input('phonenum');
        $verifycode=$request->input('verifycode');

        $newuser['fullname'] = $fullname;
        $newuser['email'] = $email;        
        $newuser['username'] = $username;
        $newuser['state'] = $state;
        $newuser['phonenum'] = $phonenum;
        $newuser['verifycode'] = $verifycode;
        return User::create($newuser);
    }
}