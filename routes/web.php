<?php

use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;



Route::get('/', [viewController::class,"viewHome"]);
Route::get('/about', [viewController::class,"viewAbout"]);
Route::get('/product', [viewController::class,"viewProduct"]);
Route::get('/process', [viewController::class,"viewProcess"]);
Route::get('/contact', [viewController::class,"viewContact"]);
