<?php

use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\TravelPackageController;
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

    Route::resource('paquetes', TravelPackageController::class)->parameters([
        'paquetes' => 'travelPackage',
    ])->only(['index','create','store','destroy',]);

    // Suppliers
    Route::resource('proveedores', SupplierController::class)->parameters([
        'proveedores' => 'supplier',
    ])->only(['index', 'store', 'update', 'destroy']);
    
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


Route::get('/reviews', [UserReviewController::class, 'index'])->name('review');
Route::post('/reviews', [UserReviewController::class, 'addReview'])->name('addreview');

Route::get('/internationaltravels', function (){
    return view('components.public.internationalsection');    
    })->name('international');
    
    // Route::get('/admin/reseñas', [AdminReviewController::class, 'index'])->name('reviews');
    // Route::get('/admin/reseñas/pendientes', [AdminReviewController::class, 'getPendingReviews'])->name('get.pending.reviews');
    // Route::get('/admin/reseñas/aceptadas', [AdminReviewController::class, 'getAcceptedReviews'])->name('get.accepted.reviews');
    // Route::get('/admin/reseñas/rechazadas', [AdminReviewController::class, 'getRejectedReviews'])->name('get.rejected.reviews');
    // Route::put('/admin/reseñas/{id}', [AdminReviewController::class, 'changeStatus'])->name('change.status.review');
    
    // Route::get('/admin/configuracion', function(){
        //     return view('admin.settings');
        // })->name('settings');
        
        // Route::get('/admin/paquetes', function(){
        //     return view('admin.packages');
        // })->name('packages');
        
        // Route::get('/admin/paquetes/crear', function(){
        //     return view('admin.packages-add');
        // })->name('packages-add');
        
        