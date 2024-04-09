<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateJsonController;
use App\Http\Controllers\ShowJsonController;

Route::get('/', [UpdateJsonController::class, 'create'])->name('main.index');
//Route::get('/', [ShowJsonController::class, 'index'])->name('main.index');
