<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function init(Request $request)
    {
        $id = $request->id;
        
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();

        $movies = ModuleController::getMovieByCategory($id);
        return view('category', [
            'movies' => $movies,
            'categories' => $categories,
            'years' => $years,
            'genreses' => $genreses,
            'countries' => $countries
        ]);
    }
}
