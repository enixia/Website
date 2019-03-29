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
Route::domain('admin.enixia.fr')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
});

Auth::routes();

Route::get('/', 'WelcomeController@welcome')->name('welcome');

Route::get('/about', 'WelcomeController@about')->name('about');

Route::get('/enigma-1', 'EnigmaController@enigma1')->name('enigma.1');
Route::get('/enigma-2', 'EnigmaController@enigma2')->name('enigma.2');
Route::get('/enigma-3', 'EnigmaController@enigma3')->name('enigma.3');
