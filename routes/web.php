<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [adminController::class, 'generateLayoutMaster']);
Route::post('/form', [adminController::class, 'addNewEvent']);
Route::get('/table', [adminController::class, 'getAllEvent']);
