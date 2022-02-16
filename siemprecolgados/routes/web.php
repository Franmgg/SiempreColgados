<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\cuotaController;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\formClientController;
use App\Http\Controllers\tareaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\tareasOpe;

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

//
// http://127.0.0.1:8000/cliente Vista de cliente para crear avisos! <--- 
//


Route::group(['middleware' => ['admin']], function () {
    
//Cliente CRUD 
Route::resource('clientes', clienteController::class);

//Tarea CRUD 
Route::resource('tareas', tareaController::class);

//Empleado CRUD
Route::resource('empleados', empleadoController::class);

//Cuota CRUD 
Route::resource('cuotas', cuotaController::class);

});
Route::group(['middleware' => ['admin','ope']], function () {
    Route::get('/', function () {return view('main');});
});

Route::group(['middleware' => ['ope']], function () {
    Route::resource('tareasOpe', tareasOpe::class);
});

Route::get('login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('cerrarsesion', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
 });

//Email ? ?
Route::get('send', [SendEmailController::class, 'sendEmail']);
//ClienteForm - Login.
Route::resource('cliente', formClientController::class);