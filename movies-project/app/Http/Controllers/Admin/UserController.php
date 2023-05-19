<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userModel;
    private $roleModel;

    private const ADMIN_USERS_PERPAGE = 5;

    function __construct()
    {
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();
    }

    function listPage()
    {
        return view("admin.users.users-list", [
            "active" => "users",
            "formEditUri" => "users-edit",
            "users" => $this->userModel->findWithPagination(self::ADMIN_USERS_PERPAGE, "id", "DESC"),
            "currentPage" => "Danh sách người dùng",
            "title" => "Danh sách người dùng"
        ]);
    }

    function editPage(Request $request)
    {
        if (isset($request->id)) {
            $user = $this->userModel->findById($request->id);
        }

        $roles = $this->roleModel->findAll("name", "ASC");

        return view("admin.users.users-edit", [
            "active" => "users",
            "user" => isset($user) ? new UserResource($user) : null,
            "roles" => $roles,
            "currentPage" => isset($user)  ? "Cập nhật thông tin người dùng" : "Thêm người dùng",
            "linkedPage" => [
                "link" => route("users"),
                "name" => "Danh sách người dùng"
            ],
            "title" => isset($user)  ? "Cập nhật thông tin người dùng" : "Thêm người dùng"
        ]);
    }

    function updateAPI(Request $request)
    {
        return $this->userModel->saveOrUpdate($request);
    }

    function saveAPI(Request $request)
    {
        return $this->userModel->saveOrUpdate($request);
    }
}
