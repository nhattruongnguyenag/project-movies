<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    function init()
    {
        $notify = ModuleController::goNotify();
        $result = ModuleController::getUser();
        return view('user', [
            'user' => $result['user'], 'countMovie' => $result['countMovie'],
            'countLike' => $result['countLike'], 'arr' => $result['arr'],
            'notify' => $notify
        ]);
    }
}
