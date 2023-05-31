<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    private static $COUNT_RELATED_MOVIE = 6;

    //get movie by id
    static function getMovieDetailById($id)
    {
        $result = MovieModel::find($id);
        return $result;
    }

    //get related movie ny movie id
    static function getRelatedMovieById($id)
    {
        $conditions = ['country', 'publish_year', 'category', 'genres'];
        $random = random_int(0, count($conditions) - 1);
        $movie = MovieModel::find($id);
        $result = '';
        foreach ($conditions as $i => $condition) {
            if ($random == $i) {
                switch ($condition) {
                    case 'country':
                        $result = MovieModel::where($condition, '=', $movie->country)->where('id','!=',$movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'publish_year':
                        $result = MovieModel::where($condition, '=', $movie->publish_year)->where('id','!=',$movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'category':
                        var_dump(2);
                        break;
                    case 'genres':
                        var_dump(3);
                        break;
                }
            }
        }
        return $result;
    }
}
