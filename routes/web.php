<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;


Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/anime-details', [PaginaController::class, 'animeDetails'])->name('anime-details');
Route::get('/anime-watching', [PaginaController::class, 'animeWatching'])->name('anime-watching');
Route::get('/blog-details', [PaginaController::class, 'blogDetails'])->name('blog-details');
Route::get('/blog', [PaginaController::class, 'blog'])->name('blog');
Route::get('/categories', [PaginaController::class, 'categories'])->name('categories');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('admin')->group(function() {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});