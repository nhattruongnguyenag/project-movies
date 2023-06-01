<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function init()
    {
        //demo
        $categories = ModuleController::getAllCategory();
        return view('home', [
            'categories' => $categories
        ]);
    }
}
