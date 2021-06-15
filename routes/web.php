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
/*  
   ////////////////////////////////
  //   **Ruta inicial login**   //
 ////////////////////////////////
*/

Route::get('/', function () {
    return view('auth.login');
});

/*  
   ///////////////////////////////////
  //   **pantallas principales**   //
 ///////////////////////////////////
*/


Route::get('welcome', function(){
    return view('welcome');
})->middleware('auth', 'estatus');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/*  
   ////////////////////////////
  //   **Rutas Usuarios**   //
 ////////////////////////////
*/


Auth::routes(['/register' => false]);

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('rolAdmin', 'estatus');

Route::post('register', 'Auth\RegisterController@register', function () {
    return view('auth.regiter');
    
})->middleware('rolAdmin');

Route::get('/ListUser', function(){
    return view ('auth.ListUser');
})->middleware('auth', 'rolAdmin', 'estatus');

Route::patch('/ListUser{usuario}/update', 'List_user@update')->name('list_vigilante.update');


/*  
   //////////////////////////////
  //   **rutas visitantes**   //
 //////////////////////////////

*/

Route::get('/new-visitor', 'VisitanteController@selects', function(){
    return view('visitor.registro_visitantes');
})->name('new-visitor')->middleware('auth', 'estatus');

Route::post('new-visitor', 'VisitanteController@store');

Route::get('/user-profiel', function(){
    return view('mconfig.user-profiel');
})->middleware('auth', 'rolAdmin');


Route::get('/list-visitor', 'VisitanteController@index', function(){
    return view('visitor.list-visitor');
})->middleware('auth', 'estatus');

Route::patch('/list-visitor{visitantes}/update', 'VisitanteController@mark_exit')->name('list_visitor.update');

Route::post('/list-visitor', 'VisitanteController@mark_entry')->name('mark_entry');

/*  
   ////////////////////////////////////////
  //   **rutas modulo configuración**   //
 ////////////////////////////////////////

*/

Route::get('/Auditoria', 'AuditoriaController@index')->middleware('auth', 'rolAdmin', 'estatus');

Route::get('/permits', function(){
    return view('mconfig.permits');
})->middleware('auth', 'rolAdmin', 'estatus');;