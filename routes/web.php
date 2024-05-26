<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio']);
Route::get('/sobre-nosotros', [PaginaController::class, 'sobreNosotros']);
Route::get('/contacto', [PaginaController::class, 'contacto']);