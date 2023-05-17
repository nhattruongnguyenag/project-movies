<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function listPage()
    {
        return view('admin.movies.movies-list', [
            'active' => 'movies-list'
        ]);
    }

    function editPage()
    {
        return view('admin.movies.movies-edit');
    }
}
