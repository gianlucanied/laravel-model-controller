<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index']);

// Route::get('/', function () {

//     return view('pages.index');
// });
