<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function init()
    {
        //demo
        $moduel = $this->module1();
        return view('home', [
            'moduel' => $moduel
        ]);
    }

    //demo 
    function module1()
    {
        return "";
    }
}
