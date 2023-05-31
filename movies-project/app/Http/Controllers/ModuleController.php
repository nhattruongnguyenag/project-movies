<?php

namespace App\Http\Controllers;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //get product by id
    static function getMovieDetailById($id)
    {
        $result = MovieModel::find($id);
        return $result;
    }

    
}
