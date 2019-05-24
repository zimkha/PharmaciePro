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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/client/{id}', 'ClientController@show')->name('client_show');

Route::get('/commande', 'CommandeController@index');
Route::resource('client', 'ClientController');
Route::get('/type-conge', 'TypecongeController@index');
Route::get('/vehicules', 'VehiculeController@index');
Route::get('/vehicule/{id}', 'VehiculeController@show');