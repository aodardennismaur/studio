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
    return redirect('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'HomeController@Login')->name('home.login');
Route::get('/login/facebook', 'HomeController@redirectToProvider');
Route::get('/login/facebook/callback', 'HomeController@handleProviderCallback');

Route::get('/registro', 'RegistrarController@index')->name('registro');
Route::post('/registro', 'RegistrarController@store')->name('registro.store');

Route::get('/cartelera', 'CarteleraController@index')->name('cartelera');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/profesor', 'ProfesorController@index')->name('profesor');
});
