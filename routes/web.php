<?php

use App\Http\Controllers\FlyController;
use App\Livewire\Products\ListProducts;
use App\Livewire\Users\ListUsers;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/vuelos', [FlyController::class, 'index']);
Route::get('/create', [FlyController::class, 'create']);

Route::get('/vuelos/{origen}', function ($origen) {
    return "Quieres viajar a $origen " ;
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/users',ListUsers::class)->name('users.index');
    Route::get('/products',ListProducts::class)->name('products.index');
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
