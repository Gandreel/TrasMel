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

Route::get('/adm', function () {
    return view('TrasMel.ADM.index');
});
//Route::get('/Personal', function () {
   // return view('TrasMel.ADM.Personal');
//});
Route::get('/Personal/Editar', function () {
    return view('TrasMel.ADM.EditarUsuario');
});

Route::post('EditarPersonal','administradorController@editar');
Route::get('Personal','administradorController@listar');

Route::get('TrasMel','paginaController@index');
Route::get('Seguimiento','paginaController@seguimiento');
Route::get('Noticias', 'paginaController@noticias');
Route::get('Servicios', 'paginaController@servicios');
Route::get('Contacto', 'paginaController@contacto');
//Noticias
Route::get('AppMovil', 'paginaController@noticia1');
Route::get('Seguimientos', 'paginaController@noticia2');
Route::get('Trasmel', 'paginaController@noticia3');

//registros
Route::get('Login', 'usuarioController@ingreso');
Route::get('Registro', 'usuarioController@registro');
Route::get('Perfil', 'usuarioController@indexPerfil');
//post
Route::post('ActualizarCrear', 'usuarioController@crearActualizar');
Route::post('Login', 'usuarioController@registrarse');
Route::post('Perfil', 'usuarioController@perfil');

/*Route::post('user/profile', 'usuarioController@store')->name('profile');


Route::post('user/profile', 'UserProfileController@show')->name('profile');

Route::post('user/profile', 'UserProfileController@show')->name('profile');
*/

