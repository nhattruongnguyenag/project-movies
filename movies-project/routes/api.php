<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\MovieController;
use Illuminate\Support\Facades\Route;

Route::post('genreses', [GenresController::class, "saveAPI"])->name("api-genreses");
Route::put('genreses', [GenresController::class, "updateAPI"]);

Route::post('categories', [CategoryController::class, "saveAPI"])->name("api-categories");
Route::put('categories', [CategoryController::class, "updateAPI"]);

Route::post('movies', [MovieController::class, "saveAPI"])->name("api-movies");
Route::put('movies', [MovieController::class, "updateAPI"]);
