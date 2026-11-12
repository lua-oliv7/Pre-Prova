<?php

use App\Livewire\Categoria\CategoriaCreate;
use Illuminate\Support\Facades\Route;



Route::get('categoria/create', CategoriaCreate::class)->name('categoria.create');
