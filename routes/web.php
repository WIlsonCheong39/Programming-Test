<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'redirectToMainPage'])->name('main');

Route::post('/distribute', [MainController::class, 'distribute'])->name('main.distribute');
