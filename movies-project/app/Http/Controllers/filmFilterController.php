<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmFilterController extends Controller
{
    public function init()
    {

        $value = ModuleController::sendDataForFilmFilter();
        $notify = ModuleController::goNotify();
        return view(
            'filmFilter',
            [
                'genres' => $value[0],
                'countries' => $value[1],
                'yearPublish' => $value[2],
                'notify' => $notify
            ]
        );
    }

    public function initResult(Request $request)
    {
        $value = ModuleController::filmFilterActivity($request);
        $notify = ModuleController::goNotify();
        if (isset($value['value'])) {
            return view('filmFilter', [
                'value' => $value['value'], 'genres' => $value['genres'],
                'countries' => $value['countries'], 'yearPublish' => $value['yearPublish'],
                'requestValue' => $value['requestValue'], 'oldInput' => $value['oldInput'],
                'notify' => $notify
            ]);
        } else {
            return view('filmFilter', [
                'genres' => $value['genres'],
                'countries' => $value['countries'], 'yearPublish' =>
                $value['yearPublish'], 'defects' =>  $value['defects'],
                'notify' => $notify
            ]);
        }
    }
}
