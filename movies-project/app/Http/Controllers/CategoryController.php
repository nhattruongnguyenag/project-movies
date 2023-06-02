<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function init(Request $request)
    {
        $id = $request->id;
        $notify = ModuleController::goNotify();
        $movies = ModuleController::getMovieByCategory($id);
        return view('category', [
            'movies' => $movies,
            'notify' => $notify
        ]);
    }
}
