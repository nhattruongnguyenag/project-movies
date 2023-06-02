<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EpisodeController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\IOFileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\SearchResultController;

Route::controller(GenresController::class)->group(function () {
    Route::post('genreses', "saveAPI")->name("api-genreses");
    Route::put('genreses', "updateAPI");
    Route::delete('genreses', "deleteAPI");
});

Route::controller(CategoryController::class)->group(function () {
    Route::post('categories', "saveAPI")->name("api-categories");
    Route::put('categories', "updateAPI");
    Route::delete('categories', "deleteAPI");
});

Route::controller(MovieController::class)->group(function () {
    Route::post('movies', "saveAPI")->name("api-movies");
    Route::put('movies', "updateAPI");
    Route::delete('movies', "deleteAPI");
});

Route::controller(EpisodeController::class)->group(function () {
    Route::post('episodes', "saveAPI")->name("api-episodes");
    Route::put('episodes', "updateAPI");
    Route::delete('episodes', "deleteAPI");
});

Route::controller(UserController::class)->group(function () {
    Route::post('users', "saveAPI")->name("api-users");
    Route::put('users', "updateAPI");
    Route::delete('users', "deleteAPI");
});

Route::controller(RoleController::class)->group(function () {
    Route::post('roles', "saveAPI")->name("api-roles");
    Route::put('roles', "updateAPI");
    Route::delete('roles', "deleteAPI");
});

Route::post('upload-image', [IOFileController::class, "uploadImage"])->name('upload-image');