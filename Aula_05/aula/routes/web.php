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


Route::get('/cliente','App\Http\Controllers\ClienteController@index');
Route::post('/cliente','App\Http\Controllers\ClienteController@store');

Route::get('/categoria','App\Http\Controllers\CategoriaController@index');

Route::get('/fornecedor','App\Http\Controllers\FornecedorController@index');

Route::get('/funcionario','App\Http\Controllers\FuncionarioController@index');

