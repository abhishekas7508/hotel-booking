<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MailController;
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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/hello',function(){
    return '<h1>hello</h1>';     //we can return text, html content, view
});

Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/services','App\Http\Controllers\PagesController@services');
Route::get('/facilities','App\Http\Controllers\PagesController@facilities');
Route::get('/ourrooms','App\Http\Controllers\PagesController@ourrooms');
Route::get('/contactus','App\Http\Controllers\PagesController@contactus');
Route::get('/success','App\Http\Controllers\PagesController@success');
Route::view('login',"login");
Route::post("login",[RegisterController::class,"logingIn"]);
Route::view("register","register");
Route::post("register",[RegisterController::class,'insertUser']);

Route::view("bookroom","bookroom");
Route::post("bookroom",[RoomController::class,'bookingroom']);

Route::post("mail",[MailController::class,'sendmail']);
// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'The user is '.$name.' with ID '.$id;
// });

//this isn't usually how we return view. We first create a controller then we return view