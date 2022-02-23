<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\cuotaController;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\tareaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\tareasOpeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\cuotasE;
use App\Http\Controllers\main;
use App\Http\Controllers\avisosController;
use App\Http\Controllers\vueController;
use App\Http\Controllers\pwdController;

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

// SOLO LOS ADMIN
Route::group(['middleware' => ['admin']], function () {
    
//Cliente CRUD 
Route::resource('clientes', clienteController::class);

//Avisos CRUD 
Route::resource('avisos', avisosController::class);

//Tarea CRUD 
Route::resource('tareas', tareaController::class);

//Empleado CRUD
Route::resource('empleados', empleadoController::class);

//Cuota CRUD 
Route::resource('cuotas', cuotaController::class);

//CuotaE CRUD 
Route::resource('cuotasE', cuotasE::class);

//Vue CRUD 
Route::resource('vue', vueController::class);
});

// SOLO LOS OPERADORES
Route::group(['middleware' => ['ope']], function () {

    Route::resource('tareasOpe', tareasOpeController::class);
    
});

// SOLO LOS ADMINS Y OPERADORES
Route::group(['middleware' => ['both']], function () {
    Route::get('send-pdf', [PDFController::class, 'index']);
    Route::get('/', [App\Http\Controllers\main::class, 'index']);
    Route::get('clienteConf', [clienteController::class, 'renameshow']);
    Route::resource('pwd',pwdController::class);
});

//TODOS
Route::get('login', [App\Http\Controllers\HomeController::class, 'index'])->name('login')->middleware("guest");

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('cerrarsesion', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
 });

//Email ? ?
Route::get('send', [SendEmailController::class, 'sendEmail']);
//ClienteForm - Login.
Route::resource('cliente', clientesController::class);



//Socialite
//google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
//github
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']);
//facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);