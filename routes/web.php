<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
})->name('home');


// Inicio y cierre de sesion
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
});

// Route::get('/login', function(){
//     return view('auth.login');
// })->name('login');

// Route::get('/admin/dashboard', function (){
//     return view('admin.dashboard');
// })->name('dashboard');

Route::get('/admin/reseñas', function (){
    return view('admin.reviews');
})->name('reviews');

Route::get('/admin/configuracion', function(){
    return view('admin.settings');
})->name('settings');

Route::get('/admin/usuarios', function(){
    return view('admin.users');
})->name('users');