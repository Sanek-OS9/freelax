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
    return view('welcome');
});
// this is beta
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'login', 'as' => 'login::', 'middleware' => 'guest'], function () {
    Route::get('github', 'SocialiteController@gitHubProvider')->name('github');
    Route::get('github/callback', 'SocialiteController@gitHubCallback');

    Route::get('facebook', 'SocialiteController@facebookProvider')->name('facebook');
    Route::get('facebook/callback', 'SocialiteController@facebookCallback');

    Route::get('google', 'SocialiteController@googleProvider')->name('google');
    Route::get('google/callback', 'SocialiteController@googleCallback');
});



// Route::get('/set', function(){
//     Session::put('session', 'working');
// });

// Route::get('/get', function(){
//     return Session::get('session');
// });