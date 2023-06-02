<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function init()
    {
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();
        $result = ModuleController::goNotify();
        return view(
            'notify',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'notify' => $result
            ]
        );
    }
}
