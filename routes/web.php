<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\SuratKuasa;
use App\Http\Livewire\izinImpor;
use App\Http\Livewire\Admin\ManageUser;

Route::redirect('/', 'dashboard');

/**
 * App Routes
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/profile', Profile::class);
    Route::get('/suratkuasa', SuratKuasa::class);
    Route::get('/izinimpor', IzinImpor::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/profile', Profile::class);
    Route::get('/suratkuasa', SuratKuasa::class);
    Route::get('/izinimpor', IzinImpor::class);

    Route::get('/admin/users', ManageUser::class);
    Route::get('/admin/suratkuasa', ManageUser::class);
});

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth','admin'])
//     ->group(function(){
//         Route::get('/', ['App\Http\Controllers\Admin\DashboardController', 'index'])->name('admin-dashboard');
//         Route::resource('user', '\App\Http\Controllers\Admin\UserController');
//         Route::resource('request', '\App\Http\Controllers\Admin\RequestsController');
// });

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');
});
