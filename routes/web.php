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
    return view('welcome');
});
// Pet
Route::get('/pets', 'PetController@index');
Route::get('/pets/create', 'PetController@create');
Route::get('/pets/{id}/edit', 'PetController@edit');
Route::get('/pets/{id}', 'PetController@show');
Route::put('/pets/{id}', 'PetController@update');
Route::post('/pets/create', 'PetController@store');
Route::delete('/pets/{id}', 'PetController@destroy');

// Client
Route::get('/clients', 'ClientController@index');
Route::get('/clients/create', 'ClientController@create');
Route::get('/clients/{id}', 'ClientController@show');
Route::post('/clients/create', 'ClientController@store');

// Home
Route::get('/home', 'HomeController@index');