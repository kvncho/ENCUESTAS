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
use App\Mail\Welcome as WelcomeEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 
Route::get('/home', 'HomeController@index');
 

Route::get('welcome', function(){
	Mail::to('kevind1310@gmail.com', 'kevin dominguez')
		->send(new WelcomeEmail());
 
});

Route::get('/users/login','usersController@index');

Route::get('/users/register','usersregisterController@show');

Route::get('/users/home','rutasController@menu');

Route::get('/users/encuestas','EncuestasController@show');


 //Route::get('/users/encuestas/{obj}','EncuestasController@show');