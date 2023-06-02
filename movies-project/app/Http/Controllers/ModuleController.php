<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\MovieModel;
use App\Models\NotifyModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

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


    //-------------------Blog area-------------------------//
    //Chu Dinh Hanh
    //Create Blog
    public function createBlog(Request $request)
    {
        $result = BlogModel::createBlog($request);
        return $result;
    }

    //Delete Blog
    public function deleteBlog(Request $request)
    {
        // Gửi thông báo thành công
        $result = BlogModel::deleteBlog($request);
        if ($result != 0) {
            session()->flash('success', 'Thông báo thành công!');
            return redirect()->route('watchBlog');
        }
    }
    //Edit blog
    static function editBlog(Request $request)
    {
        $result = BlogModel::editBlog($request);
        return $result;
    }
    //----------------------------Movie area-------------------//
    //Lay top view nhieu nhat tu truoc den nay!
    public function getTheMostTopViewEveryTime()
    {
        $value = MovieModel::getTheMostTopViewEveryTime();
        return $value;
    }


    //Lay top view nhieu nhat trong ngay!
    public function getTheMostTopViewInDay()
    {
        $value = MovieModel::getTheMostTopViewInDay();
        return $value;
    }

    //Lay top view nhieu nhat trong tuan!
    public function getTheMostTopViewInWeek()
    {
        $result = null;
        $result = MovieModel::getTheMostTopViewInWeek();
        return $result;
    }


    //Lay top view nhieu nhat trong thang!
    public function getTheMostTopViewInMonth()
    {
        $value = MovieModel::getTheMostTopViewInMonth();
        return $value;
    }

    //hanh dong tim kiem
    public function getMovieBySearch(Request $request)
    {
        $value = MovieModel::getMovieBySearch($request);
        return $value;
    }

    //lay du lieu de do qua form loc phim!
    static function sendDataForFilmFilter()
    {
        $value = MovieModel::sendDataForFilmFilter();
        return $value;
    }

    static function filmFilterActivity(Request $request)
    {
        $result = null;
        $result = MovieModel::filmFilterActivity($request);
        return $result;
    }

    static function searchMovie($search)
    {
        $result = null;
        $result = MovieModel::searchMovie($search);
        return $result;
    }
    //---------------------Notify-------------------------//
    static function goNotify()
    {
        $result = null;
        $result = NotifyModel::goNotify();
        return $result;
    }

    static function deleteNotify(Request $request)
    {
        $result = null;
        $result = NotifyModel::deleteNotify($request);
        return $result;
    }
    //------------------------User---------------------------//
    static function getUser()
    {
        $result = null;
        $result = UserModel::getUser();
        return $result;
    }
}
