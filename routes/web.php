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

Route::GET('/', 'MahasiswaController@Index');
Route::GET('/add-data', 'MahasiswaController@AddData');
Route::POST('/add-data', 'MahasiswaController@storeAddData');
Route::GET('/{id}/edit', 'MahasiswaController@EditData');
Route::POST('/{id}/edit', 'MahasiswaController@storeEditData');
Route::GET('/{id}/delete', 'MahasiswaController@DeleteData');
