<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('', 'UserController@getSignIn')->name('login');
Route::post('SignUp', 'UserController@postSignUp')->name('postSignUp');
Route::post('SignIn', 'UserController@postSignIn')->name('postSignIn');
Route::get('otp-signUp', 'UserController@getCheckOTP')->name('getCheckOTP');
Route::post('otp-signUp', 'UserController@postCheckOTP')->name('postCheckOTP');

Route::middleware(['auth'])->group(function () {
    Route::post('Logout', 'UserController@logout')->name('logout');

    Route::get('home', 'PostController@index')->name('home');
    Route::post('Post', 'PostController@create_post')->name('createPost');
    Route::get('test', 'PostController@show')->name('test');
    Route::get('singlePost/{id}', 'PostController@store');

    Route::get('friend', 'FriendController@index')->name('indexFriend');
    Route::get('addFriend/{id}', 'FriendController@addFriend')->name('addFriend');
    Route::get('comfirm/addFriend/{id}', 'FriendController@confirmFriendRequest')->name('confirmFriendRequest');
    Route::get('refuse/addFriend/{id}', 'FriendController@refuseFriendRequest')->name('refuseFriendRequest');
    Route::get('unfriend/{id}', 'FriendController@unfriend')->name('unfriend');
});


