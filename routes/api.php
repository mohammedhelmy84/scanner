<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MainController;
use Illuminate\Support\Facades\Route;

Route::get('categories',[MainController::class,"categories"]);
Route::get('setting',[MainController::class,"setting"]);

Route::post('/login',LoginController::class);
