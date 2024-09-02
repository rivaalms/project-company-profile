<?php

use App\Http\Controllers\Clients\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index'])->name('landing');
Route::get('/articles/{slug}', [ClientController::class, 'articles'])->name('articles');