<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\LikeModel;
use App\Models\MovieModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ModuleController extends Controller
{
    private static $COUNT_RELATED_MOVIE = 15;
    private static $REGISTER_ROLE = [2];
    private static $ACTIVE_STATUS = "active";

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
                        $result = MovieModel::where($condition, '=', $movie->country)->where('id', '!=', $movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'publish_year':
                        $result = MovieModel::where($condition, '=', $movie->publish_year)->where('id', '!=', $movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'category_id':
                        $result = MovieModel::where($condition, '=', $movie->category_id)->where('id', '!=', $movie->id)->limit(self::$COUNT_RELATED_MOVIE)->get();
                        break;
                    case 'genres':
                        $genresList = $movie->genreses()->get();

                        foreach ($genresList as $genres) {
                            foreach ($genres->movies()->get() as $movie) {
                                array_push($result, $movie);
                            }
                        }
                        break;
                }
            }
        }
        return $result;
    }

    // lấy phim thông qua categori_id
    static function getMovieByCategory($id)
    {
        $category = CategoryModel::find($id);
        if (isset($category)) {
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

    //check login
    static function checkLogin($request)
    {
        $user = UserModel::where('email', '=', $request['email'])->first();
        if ($user) {
            $passwordDecrypt = Crypt::decrypt($user->password);
            if ($passwordDecrypt == $request['password']) {
                return $user->id;
            } else {
                return 'Password is wrong';
            }
        } else {
            return 'Email is not isset';
        }
    }

    //register user
    static function register($request)
    {
        $user = new UserModel();
        $user->status = self::$ACTIVE_STATUS;
        $user->password =  Crypt::encrypt($request['password']);
        $user->username  = $request['username'];
        $user->email = $request['email'];

        $user->save();
        $user->roles()->attach(self::$REGISTER_ROLE);
        return $user;
    }

    //like movie
    static function likeMovie(Request $request)
    {
        $movieId = $request->movie_id;
        $movie = MovieModel::find($movieId);
        if (isset($movie) && isset($request->user_id)) {
            $like = LikeModel::where('user_id', '=', $request->user_id)->where('movie_id', '=', $movie->id)->first();
            if (isset($like->user_id)) {
                return $like->delete();
            } else {
                $like = new LikeModel();
                $like->user_id = $request->user_id;
                $like->movie_id = $movie->id;
                $like->save();
                return $like;
            }
        }
    }
}
