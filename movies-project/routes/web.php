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

// Chu Dinh Hanh
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\filmFilterController;
use App\Http\Controllers\SearchResultController;
use App\Http\Controllers\NotifyController;

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

Route::get('/watch', [WatchMovieController::class , 'init']);

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

Route::get('/404', function () {
    return view('404');
})->name('404');

//-----------------------------Chu Dinh Hanh----------------------------//
//-------------------------------------Top view----------------------------------
//Get a list of movies have most view every time
Route::get('/movie/top-view-all', [ModuleController::class, "getTheMostTopViewEveryTime"])->name('getTopViewAll');
// //Get a list of movies have most view in current month
Route::get('/movie/top-view-month', [ModuleController::class, "getTheMostTopViewInMonth"])->name('getTopViewCurrentMonth');
// //Get a list of movies have most view in current week
Route::get('/movie/top-view-week', [ModuleController::class, "getTheMostTopViewInWeek"])->name('getTopViewCurrentWeek');
//Get a list of movies have most view in current day
Route::get('/movie/top-view-day', [ModuleController::class, "getTheMostTopViewInDay"])->name('getTopViewCurrentDay');
//----------------------------------------Search-------------------------------
//Search for movies have same name or correct name
Route::post('/movie/searchMovies', [ModuleController::class, "getMovieBySearch"])->name('getMoviesByName');
//Go to blog page
//--------------------------------------Blog---------------------------
Route::get('/watch/blog', [BlogController::class, 'init'])->name('watchBlog');
Route::get('/form/create/blog',[BlogController::class,'formBlog'])->name('formCreateBlog');
Route::post('create/blog', [ModuleController::class, 'createBlog'])->name('createBlog');
Route::get('/read/blog', [BlogDetailController::class, 'init'])->name('readBlog');
Route::post('edit/blog',[ModuleController::class,'editBlog'])->name('editBlog');
Route::post('delete/blog',[ModuleController::class,'deleteBlog'])->name('deleteBlog');
//---------------------------------------Movie manager analyst-------------------------
Route::get('/film/filter', [filmFilterController::class, 'init'])->name('filmFilter');
Route::get('/film/filter/activity', [filmFilterController::class, "initResult"])->name('filmFilterActivity');
Route::get('/search', [SearchResultController::class, 'init'])->name('search');
//---------------------------------------Notify-------------------------
Route::get('notify',[NotifyController::class, 'init'])->name('notify');
Route::post('notify/delete',[ModuleController::class, 'deleteNotify'])->name('deleteNotify');
Route::get('404',function(){ return view('404');})->name('404');
//---------------------------------------User-----------------------------
Route::get('user/get',[UserDetailController::class, "init"])->name('getUser');


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




