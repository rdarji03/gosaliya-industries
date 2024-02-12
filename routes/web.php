<?php

use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;



Route::get('/', [viewController::class,"viewHome"]);
