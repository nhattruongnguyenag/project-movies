<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserProccessController extends Controller
{
    function login(Request $request)
    {
        if (!isset($request->all()['email'])) {
            return redirect()->route('login')->with(['errorEmail' => 'Email is required']);
        }

        if (!isset($request->all()['password'])) {
            return redirect()->route('login')->with(['errorPass' => 'Password is required']);
        }

        if (UserModel::find(ModuleController::checkLogin($request->all()))) {
            $user = UserModel::find(ModuleController::checkLogin($request->all()));
            $request->session()->put('user', $user);
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with(['error' => ModuleController::checkLogin($request->all())]);
        }
    }

    function logout(Request $request)
    {
        if (Session::get('user')) {
            $request->session()->forget('user');
            return redirect()->route('login');
        }
    }

    function register (Request $request)
    {
        if (!isset($request->all()['username'])) {
            return redirect()->route('register')->with(['errorUsername' => 'Username is required']);
        }

        if (!isset($request->all()['email'])) {
            return redirect()->route('register')->with(['errorEmail' => 'Email is required']);
        }

        if (!isset($request->all()['password'])) {
            return redirect()->route('register')->with(['errorPass' => 'Password is required']);
        }
        
        if(ModuleController::register($request->all())){
            return redirect()->route('login')->with(['success' => 'Registered success']);
        }
    }
}
