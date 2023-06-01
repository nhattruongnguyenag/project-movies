<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProccessController extends Controller
{
    function login(Request $request){
        if(!isset($request->all()['email']) || !isset($request->all()['password'])){
            return view('404');
        }
        if(ModuleController::checkLogin($request->all())){
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }
}
