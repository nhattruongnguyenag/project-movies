<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function init(Request $request)
    {
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();
        $notify = ModuleController::goNotify();
        $movies = ModuleController::searchMovie($request->name);
        foreach ($movies as $movie) {
            $movie->type = isset($movie->episodes()[0]) ? $movie->episodes()[0]->type: "none";
        }
        // $type = isset($movieResource->episodes()[0]) ? $movieResource->episodes()[0]->type: "none";
        return view(
            'search',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'value' => $movies,
                'notify' => $notify
            ]
        );
    }
}
