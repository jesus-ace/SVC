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
<<<<<<< HEAD
//Ruta inicial login
=======
/*  
   ////////////////////////////////
  //   **Ruta inicial login**   //
 ////////////////////////////////
*/
>>>>>>> version-developer-1.23

Route::get('/', function () {
    return view('auth.login');
});

<<<<<<< HEAD
//pantallas principales

Route::get('/welcome', function(){
    return view('/welcome');
=======
/*  
   ///////////////////////////////////
  //   **pantallas principales**   //
 ///////////////////////////////////
*/


Route::get('welcome', function(){
    return view('welcome');
>>>>>>> version-developer-1.23
})->middleware('auth', 'estatus');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

<<<<<<< HEAD

///Rutas Usuarios
=======
/*  
   ////////////////////////////
  //   **Rutas Usuarios**   //
 ////////////////////////////
*/
>>>>>>> version-developer-1.23

Auth::routes(['/register' => false]);

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('rolAdmin', 'estatus');

Route::post('register', 'Auth\RegisterController@register', function () {
    return view('auth.regiter');
    
})->middleware('rolAdmin');

Route::get('/list-vigilante', 'List_user@index')->middleware('auth', 'rolAdmin', 'estatus');

Route::patch('/list-vigilante{usuario}/update', 'List_user@update')->name('list_vigilante.update');


<<<<<<< HEAD
//rutas visitantes

Route::get('/new-visitor', 'VisitanteController@selects', function(){
    return view('visitor.registro_visitantes');
})->name('new-visitor');//->middleware('auth', 'estatus');
=======
/*  
   //////////////////////////////
  //   **rutas visitantes**   //
 //////////////////////////////

*/

Route::get('/new-visitor', 'VisitanteController@selects', function(){
    return view('visitor.registro_visitantes');
})->name('new-visitor')->middleware('auth', 'estatus');
>>>>>>> version-developer-1.23

Route::post('new-visitor', 'VisitanteController@store');

Route::get('/user-profiel', function(){
    return view('mconfig.user-profiel');
})->middleware('auth', 'rolAdmin');


Route::get('/list-visitor', 'VisitanteController@index', function(){
    return view('visitor.list-visitor');
})->middleware('auth', 'estatus');

<<<<<<< HEAD

//rutas modulo configuración

Route::get('/Auditoria', function(){
    return view('mconfig.auditoria');
})->middleware('auth', 'rolAdmin', 'estatus');
=======
Route::patch('/list-visitor{visitantes}/update', 'VisitanteController@mark_exit')->name('list_visitor.update');

Route::post('/list-visitor', 'VisitanteController@mark_entry')->name('mark_entry');

/*  
   ////////////////////////////////////////
  //   **rutas modulo configuración**   //
 ////////////////////////////////////////

*/

Route::get('/Auditoria', 'AuditoriaController@index')->middleware('auth', 'rolAdmin', 'estatus');
>>>>>>> version-developer-1.23

Route::get('/permits', function(){
    return view('mconfig.permits');
})->middleware('auth', 'rolAdmin', 'estatus');;