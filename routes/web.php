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
    return view('news/index');
});



Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('auth/{provider}', 'SocialController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function () {
//member routes start
    Route::get('/member/dashboard', 'MemberController@index');
	Route::post('/member/postnews', 'MemberController@postnews');
	Route::get('/member/post/{postid}', 'MemberController@editpost');
	Route::post('/member/updatepost', 'MemberController@updatepost');
	Route::post('/member/updatepassword', 'MemberController@updatepassword');
	Route::post('/member/updatedetails', 'MemberController@updatedetails');
//member routes end

//admin routes start
	Route::get('admin/dashboard', 'AdminController@index');
//admin routes end
	
	
});


