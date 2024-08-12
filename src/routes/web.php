<?php

use Fhsinchy\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Fhsinchy\Inspire\Controllers\InspirationController;
// use Fhsinchy\Inspire\Controllers\InspirationController;
Route::get('inspire', [InspirationController::class,'pageview']);
Route::get('list', [InspirationController::class,'list']);
Route::get('create', [InspirationController::class,'create']);
Route::post('store',[InspirationController::class,'store'])->name('store');

