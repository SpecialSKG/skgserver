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
/ Route::get('/portafolio','portafolioCtrl@index')->name('portafolio');
*/

Route::get('/', function () {
    return view('prox');
})->name('inicio');

Route::get('/acerca','acercaCtrl@index')->name('acerca');
Auth::routes();

Route::get('/skg', 'HomeController@index')->name('skg');

Route::get('/novedades','novedadesCtrl@index')->name('novedades');

Route::get('/servicios','serviciosCtrl@index')->name('servicios');

Route::get('/prueba', function () {
    return view('menu.prueba');
})->name('portafolio');

Route::get('/contacto','contactoCtrl@index')->name('contacto');
