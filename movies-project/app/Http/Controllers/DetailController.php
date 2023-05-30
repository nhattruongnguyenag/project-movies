<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function init(Request $request)
    {
        //get movie by id
        $id = $request->id;
        $movie = $this->getMovieDetailById($id);
        if($movie == null){
            return view('404');
        }
        return view('detail', [
            'movie' => new MovieResource($movie)
        ]);
    }

    //demo 
    function getMovieDetailById($id)
    {
        $result = MovieModel::find($id);
        return $result;
    }
}
