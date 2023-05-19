<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function listPage()
    {
        return view('admin.users.users-list', [
            'active' => 'users-list'
        ]);
    }

    function editPage()
    {
        return view('admin.users.users-edit');
    }
}
