<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RowsController;

Route::get('/', RowsController::class)->name('json.index');
