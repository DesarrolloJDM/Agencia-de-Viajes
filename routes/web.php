<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/admin/resenas', function (){
    return view('admin.reviews');
})->name('reviews');

Route::get('/admin/configuracion', function(){
    return view('admin.settings');
})->name('settings');

Route::get('/admin/usuarios', function(){
    return view('admin.users');
})->name('users');