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
//Ruta inicial login

Route::get('/', function () {
    return view('auth.login');
});

//pantallas principales

Route::get('/welcome', function(){
    return view('/welcome');
})->middleware('estatus');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


///Rutas Usuarios

Auth::routes(['/register' => false]);

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('rolAdmin', 'estatus');

Route::post('register', 'Auth\RegisterController@register', function () {
    return view('auth.regiter');
    
})->middleware('rolAdmin');

Route::get('/list-vigilante', 'List_user@index')->middleware('auth', 'rolAdmin', 'estatus');

Route::patch('/list-vigilante{usuario}/update', 'List_user@update')->name('list_vigilante.update');


//rutas visitantes

Route::get('/new-visitor', function(){
    return view('visitor.registro_visitantes');
})->name('new-visitor')->middleware('auth', 'estatus');

Route::post('new-visitor', 'VisitanteController@store');

Route::get('/user-profiel', function(){
    return view('mconfig.user-profiel');
})->middleware('auth', 'rolAdmin');


Route::get('/list-visitor', 'VisitanteController@index', function(){
    return view('visitor.list-visitor');
})->middleware('auth', 'estatus');


//rutas modulo configuración

Route::get('/Auditoria', function(){
    return view('mconfig.auditoria');
})->middleware('auth', 'rolAdmin', 'estatus');

Route::get('/permits', function(){
    return view('mconfig.permits');
})->middleware('auth', 'rolAdmin', 'estatus');;