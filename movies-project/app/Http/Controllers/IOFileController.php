<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class IOFileController extends Controller
{
    function uploadImage(Request $request)
    {
        $path = $request->file("image")->store("photos");
        $items = explode("/", $path);
        $fileName = $items[count($items) - 1];
        return response()->json([
            "image" => $fileName
        ]);
    }

    function renderImage(Request $request)
    {
        $path = storage_path('app/photos/' . $request->image);
        
        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        return response($file, 200, [
            "Content-Type" => $type
        ]);
    }
}