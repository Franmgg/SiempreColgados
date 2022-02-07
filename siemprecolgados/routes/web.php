<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\tareaController;

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

//Cliente CRUD -SHOW
Route::resource('clientes', clienteController::class);

//Tarea CRUD -SHOW
Route::resource('tareas', tareaController::class);

//Empleado CRUD -SHOW
Route::resource('empleados', clienteController::class);

//Cuota CRUD -SHOW
Route::resource('cuotas', clienteController::class);
