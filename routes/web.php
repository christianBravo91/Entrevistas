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


//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','IndexController@index');










Route::get('/calificar', function () {

    return view('posts.calificar');
});
Route::resource('/administrador','AdminiController')  ;



Auth::routes();
Route::get('/home','HomeController@index');


//Rutas de administrador
Route::get('/adminLogin','Auth\AdminiLoginController@showLoginForm')->name('admini.login');
Route::post('/adminiLogin','Auth\AdminiLoginController@loginAdministrador')->name('admini.login.submit');
Route::get('/adminiLogin','Auth\AdminiLoginController@loginAdministrador')->name('admini.login.submit');
Route::post('/adminLogout','Auth\AdminiLoginController@logout')->name('admini.logout');
Route::get('/adminLogout','Auth\AdminiLoginController@logout')->name('admini.logout');
Route::get('/admin','AdminiController@index')->name('admin.dashboard');

//Rutas usuarios
Route::get('/usuarioLogin','Auth\UsuarioLoginController@showLoginForm')->name('usuario.login');
Route::post('/usuarioLogin','Auth\UsuarioLoginController@login')->name('usuario.login.submit');
Route::post('/usuarioLogout','Auth\UsuarioLoginController@usuarioLogout')->name('usuario.logout');
Route::get('/usuarioLogout','Auth\UsuarioLoginController@usuarioLogout')->name('usuario.logout');
Route::get('/usuario/{email}','UsuarioController@index')->name('usuario.dashboard');



//Rutas de registros de usuarios
Route::get('/usuarioRegistrarte','Auth\RegistroUsuarioController@showRegistrationForm')->name('usuario.registro');
Route::post('/usuario/registrarte','Auth\RegistroUsuarioController@register')->name('registro.usuario');


//Rutas de registros de Administradores
Route::get('/administradoresRegistrarte','Auth\RegistroAdministradorController@showRegistrationForm')->name('administradores.registro');
Route::post('/administradores/registrarte','Auth\RegistroAdministradorController@register')->name('registro.administradores');
