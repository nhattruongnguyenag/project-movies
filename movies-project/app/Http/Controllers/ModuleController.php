<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\MovieModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ModuleController extends Controller
{
    private static $COUNT_RELATED_MOVIE = 15;

    //get movie by id
    static function getMovieDetailById($id)
    {
        $result = MovieModel::find($id);
        return $result;
    }

    //get related movie ny movie id
    static function getRelatedMovieById($id)
    {
        $conditions = ['country', 'publish_year', 'category_id', 'genres'];
        $random = random_int(0, count($conditions) - 1);
        $movie = MovieModel::find($id);
        $result = [];
        foreach ($conditions as $i => $condition) {
            if ($random == $i) {
                switch ($condition) {
                    case 'country':
                        $result = MovieModel::where($condition, '=', $movie->country)->where('id','!=',$movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'publish_year':
                        $result = MovieModel::where($condition, '=', $movie->publish_year)->where('id','!=',$movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'category_id':
                        $result = MovieModel::where($condition, '=', $movie->category_id)->where('id','!=',$movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'genres':
                        $genresList = $movie->genreses()->get();
                        foreach ($genresList as $genres) {
                            foreach ($genres->movies()->get() as $movie) {
                                array_push($result , $movie);
                            }
                        }
                        break;
                }
            }
        }
        return $result;
    }

    // lấy phim thông qua categori_id
    static function getMovieByCategory($id) {
        $category = CategoryModel::find($id);
        if ( isset($category)){
            $category = $category->movies();
        }
        return $category;
    }

    static function getAllCategory()
    {
        $categories = CategoryModel::all();
        foreach ($categories as $category) {
            $category->movies = $category->movies();
        }
        return $categories;
    }

    static function checkLogin($request){
        $user = UserModel::where('email', '=', $request['email'])->where('password', '=', self::enCryptPassword($request['password']));
        dd($user->password);
    }

    static function enCryptPassword($password){
        return Crypt::encryptString($password);
    }

    static function deCryptPassword($password){
        return Crypt::decryptString($password);
    }
}
