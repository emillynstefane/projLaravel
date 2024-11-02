<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

Route::get('/livros', [Livro::class, 'index']);
 
Route::get('/livros/adicionar', [Livro::class, 'adicionar']);
 
Route::post('/livros', [Livro::class, 'store']);
});
