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

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
   
   $user = new App\User;
   $user->email = Input::get('email');
   $user->username = Input::get('username');
   $user->password = Hash::make(Input::get('password'));
   $user->save();
   $yourEmail = Input::get('email');

   
   
    return view('thanks')->with('yourEmail',$yourEmail);
});

Route::get('/login', function () {
    
 return view('login');
});

Route::post('/login', function () {
    $credential = Input::only('username','password');
   if(Auth::attempt($credential)){
 return Redirect::intended('/');
   }
  return Redirect::intended('login');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('logout');
});

 

Route::get('memberarea', function () {
    // Only authenticated users may enter...
       return view('memberarea');
})->middleware('auth');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
