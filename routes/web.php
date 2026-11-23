<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dialogkopiController;

Route::get('/', [dialogKopiController::class, 'index'])->name('home');