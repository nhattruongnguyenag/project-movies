<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    function init()
    {
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();

        return view('user', [
            'categories' => $categories,
            'years' => $years,
            'genreses' => $genreses,
            'countries' => $countries
        ]);
    }
}
