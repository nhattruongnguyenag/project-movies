<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleModel;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $roleModel;
    private const ADMIN_ROLES_PERPAGE = 5;

    function __construct()
    {
        $this->roleModel = new RoleModel();
    }

    function listPage()
    {
        return view("admin.roles.roles-list", [
            "active" => "roles",
            "formEditUri" => "roles-edit",
            "roles" => $this->roleModel->findWithPagination(self::ADMIN_ROLES_PERPAGE, "name", "ASC"),
            "currentPage" => "Danh sách vai trò",
            "title" => "Danh sách vai trò"
        ]);
    }

    function editPage(Request $request)
    {;
        if (isset($request->id)) {
            $role = $this->roleModel->findById($request->id);
        }

        return view("admin.roles.roles-edit", [
            "active" => "roles",
            "role" => $role ?? null,
            "currentPage" => isset($role)  ? "Cập nhật vai trò" : "Thêm vai trò",
            "linkedPage" => [
                "link" => route("roles"),
                "name" => "Danh sách vai trò"
            ],
            "title" => isset($role)  ? "Cập nhật vai trò" : "Thêm vai trò"
        ]);
    }

    function updateAPI(Request $request)
    {
        $category = $request->only(["id", "name", "code"]);
        return $this->roleModel->saveOrUpdate((object) $category);
    }

    function saveAPI(Request $request)
    {
        $category = $request->only(["name", "code"]);
        return $this->roleModel->saveOrUpdate((object) $category);
    }
}