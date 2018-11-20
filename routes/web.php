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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// HOME
Route::get('/', 'HomeController@index');

// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkrole']], function() {
    Route::get('/home', 'AdminController@index')->name('dashboard-home');
    Route::get('/usuarios', 'UserController@index')->name('admin-users-list');
    Route::get('/categorias', 'CategoryController@index')->name('admin-categories-list');
    Route::get('/servicios', 'ServiceController@index')->name('admin-services-list');

});

// USER 
Route::get('/servicios', 'ServiceController@index')->name('services-list');
Route::get('/servicio/{id}/edit', 'ServiceController@edit')->name('services-edit');
Route::patch('/servicio/{id}', 'ServiceController@update');
