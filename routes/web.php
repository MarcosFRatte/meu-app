<?php

use Illuminate\Support\Facades\Route;

Route::get('/livro/criar', 'LivroController@criar');

Route::post('/livro/criar', 'LivroController@salvar');

Route::get('/', 'LivroController@listar');