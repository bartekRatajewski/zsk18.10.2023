<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', [ShowController::class, 'show']);

Route::get('showdata', [ShowController::class, 'showData']);
