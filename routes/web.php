<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
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
Route::get('/verification3_4', function () {
    return view('verification3_4');
});
Route::get('/verification3_5', function () {
    return view('verification3_5');
});
Route::get('/login', 'AuthenticateController@authenticate');
Route::post('adver/register','Advers@store');











Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::get('/mngfile', function(){
	echo view('mngfile');
});
Route::get('/signup_full_name', function(){
	return 'vvvvvvvvvv';
});
Route::get('/signup/email', function(){
	ini_set('log_errors', 1);
	error_log("err msg");
	return 'xxxxxxxxxxx';
});
Route::get('/user/register', 'Members@store');
//Auth::routes();

Route::get('/home', 'HomeController@index');
