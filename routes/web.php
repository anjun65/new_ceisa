<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\SuratKuasa;
use App\Http\Livewire\izinImpor;
use App\Http\Livewire\Admin\ManageUser;
use App\Http\Livewire\DokumenPabean;
use App\Http\Livewire\CreateDokumenPabean;
use App\Http\Livewire\Ppftz;

use App\Http\Livewire\Admin\Config;

use App\Http\Livewire\Admin\Config\Country as ConfigCountry;
use App\Http\Livewire\Admin\Config\Valuta as ConfigValuta;
use App\Http\Livewire\Admin\Config\DocumentCode as ConfigDocumentCode;
use App\Http\Livewire\Admin\Config\CaraPengangkutan as ConfigCaraPengangkutan;

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
    Route::get('/ppftz', Ppftz::class);

    Route::get('/dokumen-pabean', DokumenPabean::class);
    Route::get('/create-dokumen-pabean/{nomor_aju_pabean}', CreateDokumenPabean::class)->name('edit-dokumen-pabean');

    Route::get('/admin/users', ManageUser::class);

    Route::get('/admin/config', Config::class);
    Route::get('/admin/config/country', ConfigCountry::class)->name('country-config');
    Route::get('/admin/config/valuta', ConfigValuta::class)->name('valuta-config');
    Route::get('/admin/config/document-code', ConfigDocumentCode::class)->name('document-code-config');
    Route::get('/admin/config/cara-pengangkutan', ConfigCaraPengangkutan::class)->name('cara-pengangkutan-config');


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
