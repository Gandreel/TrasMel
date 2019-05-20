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

Route::get('/TrasMel', function () {
    return view('TrasMel/Home/Index');
});
Route::get('/TrasMel/Seguimiento', function () {
    return view('TrasMel/Home/Seguimiento');
});

Route::get('/Login',function(){
    return view('TrasMel/autentificacion/login');
});
Route::get('/Registro',function(){
    return view('TrasMel/autentificacion/registro');
});

//post
Route::post('loger', 'usuarioController@store' );

Route::post('user/profile', 'usuarioController@store')->name('profile');


Route::post('user/profile', 'UserProfileController@show')->name('profile');



