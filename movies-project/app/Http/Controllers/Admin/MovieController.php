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
        return view("admin.movies.movies-list", [
            "active" => "movies",
            "formEditUri" => "movies-edit",
            "movies" => $this->movieModel->findWithPagination(self::ADMIN_MOVIES_PERPAGE, "id", "DESC"),
            "currentPage" => "Danh sách phim",
            "title" => "Danh sách phim"
        ]);
    }

    function editPage(Request $request)
    {
        if (isset($request->id)) {
            $movie = $this->movieModel->findById($request->id);
        }

        $genreses = $this->genresModel->findAll("name", "ASC");
        $categories = $this->categoryModel->findAll("name", "ASC");

        return view("admin.movies.movies-edit", [
            "active" => "movies",
            "movie" => isset($movie) ? new MovieResource($movie) : null,
            "genreses" => $genreses,
            "categories" => $categories,
            "currentPage" => isset($movie)  ? "Cập nhật phim" : "Thêm phim",
            "linkedPage" => [
                "link" => route("movies"),
                "name" => "Danh sách phim"
            ],
            "title" => isset($movie)  ? "Cập nhật phim" : "Thêm phim"
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

    function deleteAPI(Request $request)
    {
        return $this->movieModel->deleteByIds($request->ids);
    }
}
