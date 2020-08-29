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

Route::view('/adminusuarios', 'adminusuarios')->name('adminusuarios');
Route::view('/adminproyectos', 'adminproyectos')->name('adminproyectos');


//Auth::routes();

Auth::routes(['register' => true]);
//Route::get('/home', 'HomeController@index')->name('home');
