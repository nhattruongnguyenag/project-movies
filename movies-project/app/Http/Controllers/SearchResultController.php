<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchResultController extends Controller
{
    public function init(Request $request)
    {
        $notify = ModuleController::goNotify();
        $movies = ModuleController::searchMovie($request->name);
        return view(
            'search',
            [
                'value' => $movies,
                'notify' => $notify
            ]
        );
    }
}
