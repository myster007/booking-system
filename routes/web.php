<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', 'BookController');
Route::get('/books/{id}/delete', 'BookController@destroy');

