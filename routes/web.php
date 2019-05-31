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

Route::get('/ADM', function () {
    return view('TrasMel.ADM.index');
});

/*Clientes*/
Route::get('/Clientes/Editar_Perfil', function () {
    return view('TrasMel.Clientes.EditarPerfil');
});
Route::get('/Clientes', function () {
    return view('TrasMel.Clientes.index');
});

/*Administrador*/
/*Problema Como pasar di*/
Route::get('/Personal/Editar', function () {
    return view('TrasMel.ADM.EditarUsuario');
});

Route::get('/ADM/Ruta', function () {
    return view('TrasMel.ADM.Hubicacion_1');
});

Route::post('EditarPersonal','administradorController@editar');
Route::get('Personal','administradorController@listar');

Route::get('TrasMel','paginaController@index');
Route::get('Seguimiento','paginaController@seguimiento');
Route::get('Noticias', 'paginaController@noticias');
Route::get('Servicios', 'paginaController@servicios');
Route::get('Contacto', 'paginaController@contacto');
Route::get('user/profile', 'UserProfileController@show');
//Noticias
Route::get('AppMovil', 'paginaController@noticia1');
Route::get('Seguimientos', 'paginaController@noticia2');
Route::get('Trasmel', 'paginaController@noticia3');
Route::get('Anuncio', 'paginaController@noticia4');
Route::get('Empresa', 'paginaController@noticia5');
//registros
Route::get('Login', 'usuarioController@ingreso');
Route::get('Registro', 'usuarioController@registro');
Route::get('Perfil', 'usuarioController@indexPerfil');
//post
Route::post('ActualizarCrear', 'usuarioController@crearActualizar');
Route::post('Login', 'usuarioController@registrarse');
Route::post('Perfil', 'usuarioController@perfil');

/*Queda Pendiente: Problema como pasar id sin modificar el diseño*/
Route::post('Editar_Perfil', 'usuarioController@edit');

/*Route::post('user/profile', 'usuarioController@store')->name('profile');


Route::post('user/profile', 'UserProfileController@show')->name('profile');

Route::post('user/profile', 'UserProfileController@show')->name('profile');
*/

