<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\cuotaController;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\formClientController;
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

Route::get('/', function () {return view('main');});
Route::get('login', function () {return view('login');});

//Cliente CRUD 
Route::resource('clientes', clienteController::class);

//Tarea CRUD 
Route::resource('tareas', tareaController::class);

//Empleado CRUD
Route::resource('empleados', empleadoController::class);

//Cuota CRUD 
Route::resource('cuotas', cuotaController::class);

//ClienteForm - Login.
Route::resource('cliente', formClientController::class);

