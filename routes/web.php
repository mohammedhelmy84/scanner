<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard.index');


Route::get('/', [SettingController::class,'index'])->name('dashboard.index');;

Route::resource('categories', CategoryController::class);
Route::resource('settings', SettingController::class);
