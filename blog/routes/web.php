<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/', function () {
//     return view('blog/home');
// });
// TODO: MAke these routes work.

Route::get('/', 'BlogController@publicHomePage' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('blog', 'BlogController');

//comments

Route::post('comments/{post_id}', ['uses'=>'CommentsController@stor', 'as' =>'comments.store']);
