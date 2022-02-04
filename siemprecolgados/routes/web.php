<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CTareas;
use App\Http\Controllers\clienteController;

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
    return view('main');
});
Route::any('login', function () {
    return view('login');
});
Route::any('admin', function () {
    return view('admin');
});

//Esto es para hacer login
Route::get('login')->name('login');


Route::resource('ListaCliente', clienteController::class);