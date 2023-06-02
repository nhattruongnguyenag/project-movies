<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{

    //Read Blog
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
        $result = BlogModel::readBlog($request);
        return view(
            'blogDetail',
            [
                'categories' => $categories,
                'years' => $years,
                'genreses' => $genreses,
                'countries' => $countries,
                'blog' => $result,
                'notify' => $notify
            ]
        );
    }
}
