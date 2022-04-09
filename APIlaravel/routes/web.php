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

//listar todas las categorias
Route::get('categories','App\Http\Controllers\CategoryController@index');

//listar una categorias
Route::get('category/{id}','App\Http\Controllers\CategoryController@show');

//crear una nueva categoria
Route::post('category','App\Http\Controllers\CategoryController@store');

//actualizar una categoria
Route::put('category','App\Http\Controllers\CategoryController@store');

//eliminar una categoria
Route::delete('category/{id}','App\Http\Controllers\CategoryController@destroy');