<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;

class BlogController extends Controller
{
    //watch Blog finished
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
        $notify = ModuleController::goNotify();
        $result = BlogModel::init();
        return view(
            'blog',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'blogs' => $result['blogs'],
                'user_id' => $result['user_id'],
                'notify' => $notify
            ]
        );
    }

    public function formBlog()
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
        return view(
            'areaCreateBlog',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'notify' => $notify
            ]
        );
    }
}
