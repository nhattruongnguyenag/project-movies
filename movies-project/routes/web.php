<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EpisodeController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IOFileController;
use App\Http\Controllers\CategoryController as ClientCategoryController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\UserProccessController;
use App\Http\Controllers\WatchMovieController;
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

Route::get('/home', [HomeController::class , 'init'] )->name('home');

Route::get('/category/{id}', [ClientCategoryController::class , 'init'])->name('category');

Route::get('/detail', [DetailController::class , 'init']);

Route::get('/watch', [WatchMovieController::class , 'init'])->name('watch');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/login-proccess', [UserProccessController::class , 'login'])->name('login-proccess');
Route::get('/logout', [UserProccessController::class , 'logout'])->name('logout');
Route::post('/register-proccess', [UserProccessController::class , 'register'])->name('register-proccess');

Route::get('/user', [UserDetailController::class , 'init'])->name('user');

Route::get('/test' , [ModuleController::class , 'getRelatedMovieById']);


// Admin routes 
Route::controller(MovieController::class)->group(function () {
    Route::get('/admin/movies', "listPage")->name("movies");
    Route::get('/admin/movies/{id}/edit', "editPage");
    Route::get('/admin/movies-edit', "editPage")->name("movies-edit");
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/categories', "listPage")->name("categories");
    Route::get('admin/categories/{id}/edit', "editPage");
    Route::get('admin/categories/edit', "editPage")->name("categories-edit");
});

Route::controller(GenresController::class)->group(function () {
    Route::get('admin/genreses', [GenresController::class, "listPage"])->name("genreses");
    Route::get('admin/genreses/{id}/edit', [GenresController::class, "editPage"]);
    Route::get('admin/genreses/edit', [GenresController::class, "editPage"])->name("genreses-edit");
});

Route::controller(EpisodeController::class)->group(function () {
    Route::get('admin/episodes', "listPage")->name("episodes");
    Route::get('admin/episodes/{id}/edit', "editPage");
    Route::get('admin/episodes-edit', "editPage")->name("episodes-edit");
});

Route::controller(UserController::class)->group(function () {
    Route::get('admin/users', "listPage")->name("users");
    Route::get('admin/users/{id}/edit', "editPage");
    Route::get('admin/users-edit', "editPage")->name("users-edit");
});

Route::controller(RoleController::class)->group(function () {
    Route::get('admin/roles', "listPage")->name("roles");
    Route::get('admin/roles/{id}/edit', "editPage");
    Route::get('admin/roles/edit', "editPage")->name("roles-edit");
});

Route::get('images/{image}', [IOFileController::class, "renderImage"])->name('get-image');