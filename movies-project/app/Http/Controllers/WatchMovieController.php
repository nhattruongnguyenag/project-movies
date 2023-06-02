<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;

class WatchMovieController extends Controller
{
    function init(Request $request)
    {
        $id = $request->query('id');
        $episode = $request->query('episode');

        //get movie by id
        $movie = ModuleController::getMovieDetailById($id);
        if ($movie == null) {
            return view('404');
        }

        $movieResource = new MovieResource($movie);

        if ($episode == null) {
            return view('404');
        }

        if (!isset($movieResource->episodes()[$episode - 1])) {
            return view('404');
        }

        $movieWatch = $movieResource->episodes()[$episode - 1];

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


        return view('watch', [
            'movie'=>$movieResource,
            'movieWatch'=>$movieWatch,
            'relatedMovies' => $relatedMovie,
            'categories' => $categories,
            'years' => $years,
            'genreses' => $genreses,
            'countries' => $countries
        ]);
    }
}
