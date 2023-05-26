<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryModel;
    private const ADMIN_CATEGORIES_PERPAGE = 5;

    function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    function listPage()
    {
        return view("admin.categories.categories-list", [
            "active" => "categories",
            "formEditUri" => "categories-edit",
            "categories" => $this->categoryModel->findWithPagination(self::ADMIN_CATEGORIES_PERPAGE, "id", "DESC"),
            "currentPage" => "Danh sách danh mục",
            "title" => "Danh sách danh mục"
        ]);
    }

    function editPage(Request $request)
    {;
        if (isset($request->id)) {
            $category = $this->categoryModel->findById($request->id);
        }

        return view("admin.categories.categories-edit", [
            "active" => "categories",
            "category" => $category ?? null,
            "currentPage" => isset($category)  ? "Cập nhật danh mục" : "Thêm danh mục",
            "linkedPage" => [
                "link" => route("categories"),
                "name" => "Danh sách danh mục"
            ],
            "title" => isset($category)  ? "Cập nhật danh mục" : "Thêm danh mục"
        ]);
    }

    function updateAPI(Request $request)
    {
        $category = $request->only(["id", "name"]);
        return $this->categoryModel->saveOrUpdate((object) $category);
    }

    function saveAPI(Request $request)
    {
        $category = $request->only(["name"]);
        return $this->categoryModel->saveOrUpdate((object) $category);
    }

    function deleteAPI(Request $request)
    {
        return $this->categoryModel->deleteByIds($request->ids);
    }
}