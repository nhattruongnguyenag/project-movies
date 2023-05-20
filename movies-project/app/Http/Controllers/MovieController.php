<?php

namespace App\Http\Controllers;

use App\Models\EpisodeModel;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovieByCategoryId(Request $request){
        $id = $request->query('categoryId');
        $movies  = MovieModel::where('category_id', $id)->get();
        foreach($movies as $movie){
            $movie = $movie->type($movie);
        }
        return view('category',[
            "movies" => $movies
        ]);
    }
}
