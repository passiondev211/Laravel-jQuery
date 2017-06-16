<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/post/register', 'PostController@store');
Route::post('/post/video_upload', 'PostController@video_upload');
Route::post('/adver/register','Advers@store');
Route::get('/adver/show','Advers@getArticles');
Route::get('/post/show', 'PostController@getArticles');
Route::get('/feed/updateMark', 'FeedController@updateMark');
Route::get('/feed/updateLike', 'FeedController@updateLike');
Route::post('register', 'AuthenticateController@register');
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
Route::post('adver/register','Advers@store');
Route::post('profile/avatar_upload', 'ProfileController@avatar_upload');
Route::post('profile/update_profile', 'ProfileController@store');
Route::get('/verification3_4', 'FollowController@showOtherUsers');
 Route::get('/', function () {
    return view('home');
});
Route::get('/login', 'AuthenticateController@authenticate');
Route::get('/logout', 'AuthenticateController@logout');
Route::get('/feed', 'FeedController@getArticles');
Route::get('/create', function () {
    return view('create');
});
Route::get('/step1', function () {
    return view('step1');
});
Route::get('/step2', function () {
    return view('step2');
});
Route::get('/step3', function () {
    return view('step3');
});
Route::get('/verification', function () {
    return view('verification');
});
Route::get('/verification2', function () {
    return view('verification2');
});
Route::get('/verification3', function () {
    return view('verification3');
});
Route::get('/verification3_2', function () {
    return view('verification3_2');
});
Route::get('/verification3_3', function () {
    return view('verification3_3');
});
// Route::get('/verification3_4', function () {
//     return view('verification3_4');
// });
Route::get('/verification3_5', function () {
    return view('verification3_5');
});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', 'HomeController@index');

// OAuth Routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');