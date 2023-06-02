<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmFilterController extends Controller
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

        $value = ModuleController::sendDataForFilmFilter();
        $notify = ModuleController::goNotify();
        return view(
            'filmFilter',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'genres' => $value[0],
                'countries1' => $value[1],
                'yearPublish' => $value[2],
                'notify' => $notify
            ]
        );
    }

    public function initResult(Request $request)
    {
        //get categories
        $categories = ModuleController::getAllCategory();

        //get years
        $years = ModuleController::getYears();

        //get genreses
        $genreses = ModuleController::getGenreses();

        //get countries
        $countries = ModuleController::getCountries();
        $value = ModuleController::filmFilterActivity($request);
        $notify = ModuleController::goNotify();
        // var_dump($value);
        // die();
        if (isset($value['value'])) {
            return view('filmFilter', [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'value' => $value['value'], 'genres' => $value['genres'],
                'countries1' => $value['countries'], 'yearPublish' => $value['yearPublish'],
                'requestValue' => $value['requestValue'], 'oldInput' => $value['oldInput'],
                'notify' => $notify
            ]);
        } else {
            return view('filmFilter', [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'genres' => $value['genres'],
                'countries1' => $value['countries'], 'yearPublish' =>
                $value['yearPublish'], 'defects' =>  $value['defects'],
                'notify' => $notify
            ]);
        }
    }
}
