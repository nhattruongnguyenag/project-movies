<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function init(Request $request)
    {
        $id = $request->query('id');

        //get movie by id
        $movie = ModuleController::getMovieDetailById($id);
        if ($movie == null) {
            return view('404');
        }
        $movieResource = new MovieResource($movie);
        $type = isset($movieResource->episodes()[0]) ? $movieResource->episodes()[0]->type: "none";

        //get related movies by id
        $relatedMovie = ModuleController::getRelatedMovieById($id);
        if ($relatedMovie == null) {
            return view('404');
        }
        foreach ($relatedMovie as $movie){
            $movie->type = count($movie->episodes()) != 0 ? $movie->episodes()->first()->type : "none";
        }
        
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();

        return view('detail', [
            'movie' => $movieResource,
            'type' => $type,
            'relatedMovies' => $relatedMovie,
            'categories' => $categories,
            'years' => $years,
            'genreses' => $genreses,
            'countries' => $countries
        ]);
    }
}
