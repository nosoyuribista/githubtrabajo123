<?php

use App\User;
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




Route::view('/','principal')->name('principal');

Route::view('/home', 'home')->name('home'); 
Route::view('/miproyecto', 'proyecto')->name('proyecto'); 
Route::view('/misproyectos', 'proyectos')->name('proyectos');
Route::view('/proyectossistemas', 'proyectossistemas')->name('proyectossistemas');


Route::get('/micuenta/{user}','UserController@myaccount')->name('myaccount');



//rutas de administracion
	//rutas para usuarios
Route::get('/adminusuarios', 'UserController@index')->name('adminusuarios.index')->middleware(['auth','roles:admin']);
Route::get('/adminusuarios/crear', 'UserController@create')->name('adminusuarios.create');
Route::get('/adminusuarios/{user}','UserController@show')->name('adminusuarios.show');
Route::get('/adminusuarios/{user}/editar','UserController@edit')->name('adminusuarios.edit');
Route::patch('/adminusuarios/{user}','UserController@update')->name('adminusuarios.update');
Route::post('/adminusuarios','UserController@store')->name('adminusuarios.store');
Route::post('/adminusuarios/buscar','UserController@search')->name('adminusuarios.search');
Route::delete('/adminusuarios/{user}','UserController@destroy')->name('adminusuarios.destroy');




	//rutas para proyectos
Route::get('/adminproyectos', 'ProjectController@index')->name('adminproyectos.index')->middleware(['auth','roles:admin']);
Route::get('/adminproyectos/crear','ProjectController@create')->name('adminproyectos.create');

Route::get('/adminproyectos/{project}/editar','ProjectController@edit')->name('adminproyectos.edit');
Route::patch('/adminproyectos/{project}','ProjectController@update')->name('adminproyectos.update');

Route::post('/adminproyectos', 'ProjectController@store')->name('adminproyectos.store');
Route::get('/adminproyectos/{project}','ProjectController@show')->name('adminproyectos.show');

Route::delete('/adminproyectos/{project}','ProjectController@destroy')->name('adminproyectos.destroy');

Route::post('/adminproyectos/buscar','ProjectController@search')->name('adminproyectos.search');

Route::post('/agregarusuario/{project}','ProjectController@adduser')->name('adminproyectos.adduser');
Route::get('/borrarusuario/{project}/{user_id}','ProjectController@deleteuser')->name('adminproyectos.deleteuser');

//Auth::routes();

Auth::routes(['register' => true]);
//Route::get('/home', 'HomeController@index')->name('home');
