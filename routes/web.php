<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

// Página Inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Produtos: CRUD completo
Route::resource('produtos', ProdutoController::class);

// Categorias: CRUD completo
Route::resource('categorias', CategoriaController::class);

