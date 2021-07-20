<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
* Rutas para las acciones del usuario
*/

Route::get('/list_user', 'List_user@index')->name('list_user'); 
Route::put('/List_user/{id}', 'List_user@edit');

/*
* Rutas para las acciones de visitantes
*/
Route::get('/list_visitor', 'VisitanteController@index')->name('list_user'); 