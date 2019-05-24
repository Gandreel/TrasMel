<?php
use Illuminate\Support\Facades\Route;

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

Route::get('TrasMel','paginaController@index');
Route::get('Registro','usuarioController@index');
Route::get('Seguimiento','paginaController@seguimiento');

/*

Route::get('Login','TrasMel/autentificacion/login');

Route::get('Log', 'TrasMel/autentificacion/login1');
Route::get('Registro','TrasMel/Autentificacion/registro');


*/


//post
Route::post('reg', 'usuarioController@store' );

/*Route::post('user/profile', 'usuarioController@store')->name('profile');


Route::post('user/profile', 'UserProfileController@show')->name('profile');

Route::post('user/profile', 'UserProfileController@show')->name('profile');
*/

