<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'showAll']);

Route::get('/student/{id}', [StudentController::class, 'index']);