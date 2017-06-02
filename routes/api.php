<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/signup_full_name', function (Request $request) {
    echo $request;
    return 'vvvvvvvvv';
});

//Route::get('/signup/email', 'Home\AdminController@esignup');


Route::resource('todo', 'TodoController');
Route::get('/signup/email', function(Request $request){
 	return $request;
});
Route::post('/post/register', 'PostController@store');
Route::post('/post/video_upload', 'PostController@video_upload');
Route::post('/adver/register','Advers@store');
Route::get('/adver/show','Advers@getArticles');
Route::get('/post/show', 'PostController@getArticles');
Route::post('register', 'AuthenticateController@register');
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');




Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/uploads/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


