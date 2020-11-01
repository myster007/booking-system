<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/cheapest', 'BookController@cheapest');
Route::get('/books/longest', 'BookController@longest');
Route::get('/books/search', 'BookController@search');
Route::get('/books/{id}/delete', 'BookController@destroy');
Route::resource('books', 'BookController');
Route::resource('loans' , 'LoanController');
Route::resource('authors', 'AuthorController');

