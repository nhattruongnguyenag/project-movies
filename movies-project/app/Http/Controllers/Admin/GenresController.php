<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GenresModel;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    private $genresModel;
    private const ADMIN_GENRESES_PERPAGE = 5;

    function __construct()
    {
        $this->genresModel = new GenresModel();
    }

    function listPage()
    {
        return view("admin.genreses.genreses-list", [
            "active" => "genreses",
            "formEditUri" => "genreses-edit",
            "genreses" => $this->genresModel->findWithPagination(self::ADMIN_GENRESES_PERPAGE, "id", "DESC"),
            "currentPage" => "Danh sách thể loại",
            "title" => "Danh sách thể loại"
        ]);
    }

    function editPage(Request $request)
    {;
        if (isset($request->id)) {
            $genres = $this->genresModel->findById($request->id);
        }

        return view("admin.genreses.genreses-edit", [
            "active" => "genreses",
            "genres" => $genres ?? null,
            "currentPage" => isset($genres)  ? "Cập nhật thể loại" : "Thêm thể loại",
            "linkedPage" => [
                "link" => route("genreses"),
                "name" => "Danh sách thể loại"
            ],
            "title" => isset($genres)  ? "Cập nhật thể loại" : "Thêm thể loại"
        ]);
    }

    function updateAPI(Request $request)
    {
        $category = $request->only(["id", "name"]);
        return $this->genresModel->saveOrUpdate((object) $category);
    }

    function saveAPI(Request $request)
    {
        $category = $request->only(["name"]);
        return $this->genresModel->saveOrUpdate((object) $category);
    }
}
