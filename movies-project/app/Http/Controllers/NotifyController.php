<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function init()
    {
        $result = ModuleController::goNotify();
        return view('notify',['notify'=>$result]);
        
    }
}
