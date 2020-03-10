<?php

use Illuminate\Support\Facades\Route;

Route::get('/{livro}', 'LivroController@listar');