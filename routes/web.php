<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard.index');


Route::get('/', [AuthController::class,'login'])->name('auth.login');
Route::get('/dashboard', [SettingController::class,'index'])->name('dashboard.index');

Route::resource('categories', CategoryController::class);
Route::resource('settings', SettingController::class);

Route::get('/register', [AuthController::class,'register'])->name('dashboard.register');
Route::post('/register', [AuthController::class,'store'])->name('auth.store');

Route::post('/login', [AuthController::class,'authenticated'])->name('auth.authenticated');

Route::get('/logout', [AuthController::class,'logout'])->name('auth.logout');
