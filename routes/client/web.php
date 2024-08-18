<?php

use App\Http\Controllers\Clients\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.index');
});

Route::get('/articles/{slug}', [ClientController::class, 'articles'])->name('articles');