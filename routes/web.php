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
    return view('home');
})->name('inicio');

Route::get('/acerca','acercaCtrl@index')->name('acerca');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/novedades','novedadesCtrl@index')->name('novedades');

Route::get('/servicios','serviciosCtrl@index')->name('servicios');

Route::get('/portafolio','portafolioCtrl@index')->name('portafolio');

Route::get('/contacto','contactoCtrl@index')->name('contacto');
