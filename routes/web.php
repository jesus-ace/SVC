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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function(){
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/new-visitor', function(){
    return view('registro_visitantes');
})->middleware('auth');

Route::get('/user-profiel', function(){
    return view('user-profiel');
})->middleware('auth');

Route::get('/list-vigilante', 'List_user@index')->middleware('auth');
Route::patch('/list-vigilante{usuario}/update', 'List_user@update')->name('list_vigilante.update');

