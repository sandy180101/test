<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('home',[DashboardController::class,'index']);
Route::get('registeration/add',[FormController::class,'add']);
Route::post('registeration/save',[FormController::class,'save']);

