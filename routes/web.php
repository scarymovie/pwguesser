<?php

use App\Http\Controllers\GetGamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GetGamesController::class, 'do'])->name('get.games');

