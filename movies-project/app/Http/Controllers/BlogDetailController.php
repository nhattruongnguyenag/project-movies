<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{

    //Read Blog
    public function init(Request $request)
    {
        $notify = ModuleController::goNotify();
        $result = BlogModel::readBlog($request);
        return view(
            'blogDetail',
            [
                'blog' => $result,
                'notify' => $notify
            ]
        );
    }
}
