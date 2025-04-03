<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/', function () {
    return redirect('/books');
});
