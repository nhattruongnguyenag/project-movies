<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function listPage()
    {
        return view('admin.categories.categories-list', [
            'active' => 'categories-list'
        ]);
    }

    function editPage()
    {
        return view('admin.categories.categories-edit');
    }
}
