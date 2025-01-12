<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('/search-query', [SearchController::class, 'search_query'])->name('search-query');
