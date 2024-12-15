<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(BookController::class)->group(function () {
    Route::get('books', 'getAllBooks');
});

