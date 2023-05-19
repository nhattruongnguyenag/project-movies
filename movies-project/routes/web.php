<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EpisodeController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Admin routes 

Route::controller(MovieController::class)->group(function () {
    Route::get('/admin/movies', "listPage")->name("movies");
    Route::get('/admin/movies/{id}/edit', "editPage");
    Route::get('/admin/movies-edit', "editPage")->name("movies-edit");
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/admin/categories', "listPage")->name("categories");
    Route::get('admin/categories/{id}/edit', "editPage");
    Route::get('/admin/categories/edit', "editPage")->name("categories-edit");
});

Route::controller(GenresController::class)->group(function () {
    Route::get('/admin/genreses', [GenresController::class, "listPage"])->name("genreses");
    Route::get('/admin/genreses/{id}/edit', [GenresController::class, "editPage"]);
    Route::get('/admin/genreses/edit', [GenresController::class, "editPage"])->name("genreses-edit");
});

Route::get('/admin/episodes-list', [EpisodeController::class, "listPage"])->name("episodes");
Route::get('/admin/episodes-edit', [EpisodeController::class, "editPage"])->name("episodes-edit");



Route::get('/admin/users-list', [UserController::class, "listPage"])->name("users");
Route::get('/admin/users-edit', [UserController::class, "editPage"])->name("users-edit");
