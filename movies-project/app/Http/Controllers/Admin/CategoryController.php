<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use PSpell\Config;

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
        return view('admin.categories.categories-list', [
            'active' => 'categories',
            'formEditUri' => 'categories-edit',
            'categories' => $this->categoryModel->findWithPagination(self::ADMIN_CATEGORIES_PERPAGE)
        ]);
    }

    function editPage(Request $request)
    {;
        if (isset($request->id)) {
            $category = $this->categoryModel->findById($request->id);
        }

        return view('admin.categories.categories-edit', [
            'active' => 'categories',
            "category" => $category ?? null
        ]);
    }

    function updateAPI(Request $request)
    {
        $category = $request->only(['id', 'name']);
        return $this->categoryModel->saveOrUpdate((object) $category);
    }

    function saveAPI(Request $request)
    {
        $category = $request->only(['name']);
        return $this->categoryModel->saveOrUpdate((object) $category);
    }
}