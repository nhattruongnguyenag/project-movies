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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/watch', function () {
    return view('watch');
})->name('watch');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/user', function () {
    return view('user');
})->name('user');
// Admin routes 

Route::get('/admin/movies-list', [MovieController::class, "listPage"])->name("movies-list");
Route::get('/admin/movies-edit', [MovieController::class, "editPage"])->name("movies-edit");

Route::get('/admin/episodes-list', [EpisodeController::class, "listPage"])->name("episodes-list");
Route::get('/admin/episodes-edit', [EpisodeController::class, "editPage"])->name("episodes-edit");

Route::get('/admin/categories-list', [CategoryController::class, "listPage"])->name("categories-list");
Route::get('/admin/categories-edit', [CategoryController::class, "editPage"])->name("categories-edit");

Route::get('/admin/genreses-list', [GenresController::class, "listPage"])->name("genreses-list");
Route::get('/admin/genreses-edit', [GenresController::class, "editPage"])->name("genreses-edit");

Route::get('/admin/users-list', [UserController::class, "listPage"])->name("users-list");
Route::get('/admin/users-edit', [UserController::class, "editPage"])->name("users-edit");
