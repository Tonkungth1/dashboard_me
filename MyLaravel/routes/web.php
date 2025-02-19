<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


use App\Http\Controllers\DashboardController;

Route::get('/',[DashboardController::class,'index']);
