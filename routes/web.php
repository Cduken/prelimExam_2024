<?php

use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/items', [ItemController::class, 'index'])->name('items');

Route::get('/pictures', function () {
    return view('picture');
})->name('pictures');



