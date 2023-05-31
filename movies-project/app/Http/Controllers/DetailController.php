<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function init(Request $request)
    {
        //get movie by id
        $id = $request->query('id');
        $movie = ModuleController::getMovieDetailById($id);
        if($movie == null){
            return view('404');
        }
        return view('detail', [
            'movie' => new MovieResource($movie)
        ]);
    }
}
