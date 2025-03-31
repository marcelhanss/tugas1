<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [catalogController::class, 'index']);

// Route::get('/catalog', function () {
//     return view('catalog');
// });

Route::resource('books', catalogController::class);