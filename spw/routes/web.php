<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AcercadeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServicioController;





// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [WelcomeController::class, 'welcome'])->name('web.welcome');
Route::get('/Acercade', [AcercadeController::class, 'acercade'])->name('web.acercade');
Route::get('/Contacto', [ContactoController::class, 'contacto'])->name('web.contacto');

Route::get('/Servicio', [ServicioController::class, 'servicio'])->name('web.servicio');




Route ::resource('tasks', TaskController::class);