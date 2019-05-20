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

//TrasMel
Route::get('/TrasMel', function () {
    return view('TrasMel/Home/Index');
});
Route::get('/TrasMel/Seguimiento', function () {
    return view('TrasMel/Home/Seguimiento');
});
Route::get('/TrasMel/Contacto', function () {
    return view('TrasMel/Home/contact');
});
Route::get('/TrasMel/Noticias', function () {
    return view('TrasMel/Home/noticias');
});

Route::get('/Login',function(){
    return view('TrasMel/autentificacion/login');
});
Route::get('/Registro',function(){
    return view('TrasMel/autentificacion/registro');
});


//Noticias
Route::get('/TrasMel/Noticias/AppMovil', function () {
    return view('TrasMel/Noticias/AppMovil');
});
Route::get('/TrasMel/Noticias/Seguimiento', function () {
    return view('TrasMel/Noticias/Seguimiento');
});
Route::get('/TrasMel/Noticias/TrasMel', function () {
    return view('TrasMel/Noticias/TrasMel');
});

//post
Route::post('loger', 'usuarioController@store' );

Route::post('user/profile', 'usuarioController@store')->name('profile');


Route::post('user/profile', 'UserProfileController@show')->name('profile');



