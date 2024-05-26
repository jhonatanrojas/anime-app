<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AdminController;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/anime-details', [PaginaController::class, 'animeDetails'])->name('anime-details');
Route::get('/anime-watching', [PaginaController::class, 'animeWatching'])->name('anime-watching');
Route::get('/blog-details', [PaginaController::class, 'blogDetails'])->name('blog-details');
Route::get('/blog', [PaginaController::class, 'blog'])->name('blog');
Route::get('/categories', [PaginaController::class, 'categories'])->name('categories');
Route::get('/login', [PaginaController::class, 'login'])->name('login');
Route::get('/signup', [PaginaController::class, 'signup'])->name('signup');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    // Agrega más rutas según sea necesario para las acciones de administración
});