<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    function listPage()
    {
        return view('admin.genreses.genreses-list', [
            'active' => 'genreses-list'
        ]);
    }

    function editPage()
    {
        return view('admin.genreses.genreses-edit');
    }
}
