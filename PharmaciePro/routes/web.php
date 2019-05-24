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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => '/commande'], function(){
  Route::get('/', 'Bon_commandeController@index')->name('commande_index');
  Route::post('/store', 'Bon_commandeController@store')->name('commande_store');
  Route::get('/create', 'Bon_commandeController@create')->name('commande_create');
  Route::get('/new', 'Bon_commandeController@newcommande');
});
Route::get('/article', 'ArticleController@all');
