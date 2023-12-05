<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\KehadiranController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ActivityController::class)->prefix('activity')->group(function () {
        Route::get('', 'index')->name('activity');
        Route::get('create', 'create')->name('activity.create');
        Route::post('store', 'store')->name('activity.store');
        Route::get('show/{id}', 'show')->name('activity.show');
        Route::get('edit/{id}', 'edit')->name('activity.edit');
        Route::put('edit/{id}', 'update')->name('activity.update');
        Route::delete('destroy/{id}', 'destroy')->name('activity.destroy');
    });

    Route::controller(JamaahController::class)->prefix('jamaah')->group(function () {
        Route::get('', 'index')->name('jamaah');
        Route::get('create', 'create')->name('jamaah.create');
        Route::post('store', 'store')->name('jamaah.store');
        Route::get('show/{id}', 'show')->name('jamaah.show');
        Route::get('edit/{id}', 'edit')->name('jamaah.edit');
        Route::put('edit/{id}', 'update')->name('jamaah.update');
        Route::delete('destroy/{id}', 'destroy')->name('jamaah.destroy');
    });

    Route::controller(KehadiranController::class)->prefix('kehadiran')->group(function () {
        Route::get('', 'index')->name('kehadiran');
        Route::get('create', 'create')->name('kehadiran.create');
        Route::post('store', 'store')->name('kehadiran.store');
        Route::get('show/{id}', 'show')->name('kehadiran.show');
        Route::get('edit/{id}', 'edit')->name('kehadiran.edit');
        Route::put('edit/{id}', 'update')->name('kehadiran.update');
        Route::delete('destroy/{id}', 'destroy')->name('kehadiran.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
