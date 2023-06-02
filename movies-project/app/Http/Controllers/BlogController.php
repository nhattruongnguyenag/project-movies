<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;

class BlogController extends Controller
{
    //watch Blog finished
    public function init()
    {
        $notify = ModuleController::goNotify();
        $result = BlogModel::init();
        return view(
            'blog',
            [
                'blogs' => $result['blogs'],
                'user_id' => $result['user_id'],
                'notify' => $notify
            ]
        );
    }

    public function formBlog()
    {
        $notify = ModuleController::goNotify();
        return view('areaCreateBlog',['notify'=>$notify]);
    }
    public function editBlog(Request $request)
    {
        $notify = ModuleController::goNotify();
        $result = ModuleController::editBlog($request);
        return view('areaCreateBlog', ['blog' => $result, 'notify'=>$notify]);
    }
}
