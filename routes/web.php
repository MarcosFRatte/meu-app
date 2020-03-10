<?php

use Illuminate\Support\Facades\Route;

Route::get('/livro/criar', 'LivroController@criar');

Route::get('/{livro}', 'LivroController@listar');