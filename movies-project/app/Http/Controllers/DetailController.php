<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function init()
    {
        //demo
        $moduel = $this->module1();
        return view('detail', [
            'moduel' => $moduel
        ]);
    }

    //demo 
    function module1()
    {
        return "";
    }
}
