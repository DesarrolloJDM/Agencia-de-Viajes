<?php

use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Public\UserReviewController;
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

    // Destination
    Route::resource('destinos', DestinationController::class)->parameters([
        'destinos' => 'destination',
    ])->only(['index', 'create', 'store']);
    
    // Users
    Route::resource('usuarios', UserController::class)->parameters([
        'usuarios' => 'user',
    ])->names('users');

    // Settings
    Route::get('/configuracion', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/configuracion/general', [SettingController::class, 'updateGeneral'])->name('settings.general.update');
    Route::put('/configuracion/redes-sociales', [SettingController::class, 'updateSocialMedia'])->name('settings.social.update');
    Route::put('/configuracion/logotipo', [SettingController::class, 'updateLogo'])->name('settings.logo.update');

    Route::get('/reseñas', [AdminReviewController::class, 'index'])->name('reviews');
    Route::put('/reseñas/{id}', [AdminReviewController::class, 'changeStatus'])->name('change.status.review');
});

// Route::get('/admin/reseñas', [AdminReviewController::class, 'index'])->name('reviews');
// Route::get('/admin/reseñas/pendientes', [AdminReviewController::class, 'getPendingReviews'])->name('get.pending.reviews');
// Route::get('/admin/reseñas/aceptadas', [AdminReviewController::class, 'getAcceptedReviews'])->name('get.accepted.reviews');
// Route::get('/admin/reseñas/rechazadas', [AdminReviewController::class, 'getRejectedReviews'])->name('get.rejected.reviews');
// Route::put('/admin/reseñas/{id}', [AdminReviewController::class, 'changeStatus'])->name('change.status.review');

// Route::get('/admin/destinos', function (){
//     return view('admin.destinations');
// })->name('destinations');

// Route::get('/admin/crear_destino', function (){
//     return view('admin.destination-add');
// })->name('destination-add');
    
Route::get('/reviews', [UserReviewController::class, 'index'])->name('review');
Route::post('/reviews', [UserReviewController::class, 'addReview'])->name('addreview');

Route::get('/internationaltravels', function (){
    return view('components.public.internationalsection');    
})->name('international');
    
    // Route::get('/admin/usuarios', function(){
    //     return view('admin.users');
    // })->name('users');
    
    // Route::get('/login', function(){
    //     return view('auth.login');
    // })->name('login');
    
    // Route::get('/admin/dashboard', function (){
    //     return view('admin.dashboard');
    // })->name('dashboard');
    
    // Route::get('/admin/usuarios', function(){
    //     return view('admin.users');
    // })->name('users');
    
    // Route::get('/admin/configuracion', function(){
    //     return view('admin.settings');
    // })->name('settings');
    