<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/activities', [PageController::class, 'activities'])->name('activities');
