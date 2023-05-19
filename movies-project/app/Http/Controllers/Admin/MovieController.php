<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\CategoryModel;
use App\Models\GenresModel;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    private $movieModel;
    private $categoryModel;
    private $genresModel;

    private const ADMIN_MOVIES_PERPAGE = 3;

    function __construct()
    {
        $this->movieModel = new MovieModel();
        $this->categoryModel = new CategoryModel();
        $this->genresModel = new GenresModel();
    }

    function listPage()
    {
        return view('admin.movies.movies-list', [
            'active' => 'movies',
            'formEditUri' => 'movies-edit',
            'movies' => $this->movieModel->findWithPagination(self::ADMIN_MOVIES_PERPAGE)
        ]);
    }

    function editPage(Request $request)
    {;
        if (isset($request->id)) {
            $movie = $this->movieModel->findById($request->id);
        }

        $genreses = $this->genresModel->findAll();
        $categories = $this->categoryModel->findAll();

        return view('admin.movies.movies-edit', [
            'active' => 'movies',
            "movie" => new MovieResource($movie) ?? null,
            "genreses" => $genreses,
            "categories" => $categories
        ]);
    }

    function updateAPI(Request $request)
    {
        return $this->movieModel->saveOrUpdate($request);
    }

    function saveAPI(Request $request)
    {
        return $this->movieModel->saveOrUpdate($request);
    }
}