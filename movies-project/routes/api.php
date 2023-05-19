<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EpisodeController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\IOFileController;
use Illuminate\Support\Facades\Route;

Route::controller(GenresController::class)->group(function () {
    Route::post('genreses', "saveAPI")->name("api-genreses");
    Route::put('genreses', "updateAPI");
});

Route::controller(CategoryController::class)->group(function () {
    Route::post('categories', "saveAPI")->name("api-categories");
    Route::put('categories', "updateAPI");
});

Route::controller(MovieController::class)->group(function () {
    Route::post('movies', "saveAPI")->name("api-movies");
    Route::put('movies', "updateAPI");
});

Route::controller(EpisodeController::class)->group(function () {
    Route::post('episodes', "saveAPI")->name("api-episodes");
    Route::put('episodes', "updateAPI");
});

Route::controller(UserController::class)->group(function () {
    Route::post('users', "saveAPI")->name("api-users");
    Route::put('users', "updateAPI");
});

Route::controller(RoleController::class)->group(function () {
    Route::post('roles', "saveAPI")->name("api-roles");
    Route::put('roles', "updateAPI");
});

Route::post('upload-image', [IOFileController::class, "uploadImage"])->name('upload-image');