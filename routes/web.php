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



//rutas de administracion
	//rutas para usuarios
Route::view('/adminusuarios', 'adminusuarios')->name('adminusuarios');


	//rutas para proyectos
Route::get('/adminproyectos', 'ProjectController@index')->name('adminproyectos.index');
Route::get('/adminproyectos/crear','ProjectController@create')->name('adminproyectos.create');

Route::get('/adminproyectos/{project}/editar','ProjectController@edit')->name('adminproyectos.edit');
Route::patch('/adminproyectos/{project}','ProjectController@update')->name('adminproyectos.update');

Route::post('/adminproyectos', 'ProjectController@store')->name('adminproyectos.store');
Route::get('/adminproyectos/{project}','ProjectController@show')->name('adminproyectos.show');

Route::delete('/adminproyectos/{project}','ProjectController@destroy')->name('adminproyectos.destroy');

Route::get('/adminproyectos/search','ProjectController@search')->name('adminproyectos.search');



//Auth::routes();

Auth::routes(['register' => true]);
//Route::get('/home', 'HomeController@index')->name('home');
