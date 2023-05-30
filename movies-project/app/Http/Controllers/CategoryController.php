<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function init()
    {
        //demo
        $moduel = $this->module1();
        return view('category', [
            'moduel' => $moduel
        ]);
    }

    //demo 
    function module1()
    {
        return "";
    }
}
