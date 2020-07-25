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

Route::get('/Acerca','acercaCtrl@index')->name('Acerca');
Auth::routes();

Route::get('/skg', 'HomeController@index')->name('Skg');

Route::get('/Novedades','novedadesCtrl@index')->name('Novedades');

Route::get('/Server','serviciosCtrl@index')->name('Server');

Route::get('/Redes','contactoCtrl@index')->name('Redes');
