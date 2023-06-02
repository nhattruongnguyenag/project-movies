<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    protected $table = "movies";
    public $incrementing = true;

    function findAll($orderBy, $orderName)
    {
        return self::orderBy($orderBy, $orderName)->get();
    }

    function genreses()
    {
        return $this->belongsToMany(GenresModel::class, "genreses_movies", "move_id", "genres_id");
    }

    function category()
    {
        return $this->hasOne(CategoryModel::class, "id", "category_id");
    }

    function findWithPagination($offset, $orderBy, $orderName)
    {
        return self::orderBy($orderBy, $orderName)->paginate($offset);
    }

    public function findById($id)
    {
        return self::find($id);
    }

    function saveOrUpdate($requestObject)
    {
        if (isset($requestObject->id)) {
            $movie = $this->findById($requestObject->id);

            if (isset($requestObject->image)) {
                $movie->image = $requestObject->image;
            }

            $movie->genreses()->detach();
        } else {
            $movie = new MovieModel();
            $movie->image = $requestObject->image;
        }

        $movie->actor = $requestObject->actor;
        $movie->name = $requestObject->name;
        $movie->director = $requestObject->director;
        $movie->description = $requestObject->description;
        $movie->status = $requestObject->status;
        $movie->category_id  = $requestObject->category_id;
        $movie->country = $requestObject->country;
        $movie->duration = $requestObject->duration;
        $movie->publish_year = $requestObject->publish_year;
        $movie->save();

        $movie->genreses()->attach($requestObject->genresIds);

        return response($movie, 201);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);

        return response([
            "msg" => "Xoa thanh cong"
        ], 200);
    }

    function episodes()
    {
        return $this->hasMany(EpisodeModel::class , 'move_id' , 'id')->orderBy('episode', 'ASC')->get();
    }

    //-----------------------Chu Dinh Hanh--------------------------//
    //Lay top view nhieu nhat trong ngay!
    static function getTheMostTopViewInDay()
    {
        $date = date('Y-m-d');
        $value = self::join('users_movies', 'users_movies.movie_id', '=', 'movies.id')
            ->where('users_movies.watching_time', '=', $date . '')
            ->select(self::raw('movies.image as image'), self::raw('movie_id as movie_id'), self::raw('movies.name as name'), self::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }

    //Lay top view nhieu nhat trong tuan!
    static function getTheMostTopViewInWeek()
    {
        $result = null;
        $today = Carbon::now('Asia/Ho_Chi_Minh');
        $to = $today->format('Y-m-d');
        // DOW = Day Of Week!
        $DOW = $today->dayOfWeek;
        switch ($DOW) {
            case '0':
                $from =  $today->subDays(6)->format('Y-m-d');
                $result = self::calculateDayInAWeek($from, $to);
                break;
            case '1':
                $from =  $today->subDays(5)->format('Y-m-d');
                $result =  self::calculateDayInAWeek($from, $to);
                break;
            case '2':
                $from =  $today->subDays(4)->format('Y-m-d');
                $result = self::calculateDayInAWeek($from, $to);
                break;
            case '3':
                $from =  $today->subDays(3)->format('Y-m-d');
                $result = self::calculateDayInAWeek($from, $to);
                break;
            case '4':
                $from =  $today->subDays(2)->format('Y-m-d');
                $result =  self::calculateDayInAWeek($from, $to);
                break;
            case '5':
                $from =  $today->subDays(1)->format('Y-m-d');
                $result = self::calculateDayInAWeek($from, $to);
                break;
            case '6':
                $result = self::calculateDayInAWeek($to, $to);
                break;
        }
        return $result;
    }

    static function calculateDayInAWeek($form, $to)
    {
        $value = self::join('users_movies', 'users_movies.movie_id', '=', 'movies.id')
            ->whereBetween('users_movies.watching_time', [$form, $to])
            ->select(self::raw('movies.image as image'), self::raw('movie_id as movie_id'), self::raw('movies.name as name'), self::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }

    //Lay top view nhieu nhat trong thang!
    static function getTheMostTopViewInMonth()
    {
        $flag = self::getLeapYear();
        $month = (int)date('m');
        $arrayDateFromAndTo = self::getNumberDayInYear($month, $flag);
        $value = self::join('users_movies', 'users_movies.movie_id', '=', 'movies.id')
            ->whereBetween('users_movies.watching_time', [$arrayDateFromAndTo[0], $arrayDateFromAndTo[1]])
            ->select(self::raw('movies.image as image'), self::raw('movie_id as movie_id'), self::raw('movies.name as name'), self::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }

    //Lay top view nhieu nhat tu truoc den nay!
    static function getTheMostTopViewEveryTime()
    {
        $value = self::join('users_movies', 'users_movies.movie_id', '=', 'movies.id')
            ->select(self::raw('movies.image as image'), self::raw('movie_id as movie_id'), self::raw('movies.name as name'), self::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }

    //Tinh nam nhuan
    static function getLeapYear()
    {
        $flag = false;
        $year = (int)date('Y');
        if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0 && $year % 100 != 0)) {
            $flag = true;
        }
        return  $flag;
    }
    //Tinh so ngay trong thang theo nam
    static function getNumberDayInYear($month, $isLeapYear)
    {
        $Y = (int)date('Y');
        $array = null;
        if ($month == 1 ||  $month == 3 ||  $month == 5 ||  $month == 7 ||  $month == 8 ||  $month == 10 ||  $month == 12) {
            if (strlen($month) == 1) {
                $array = [$Y . '-0' . $month . '-1', $Y . '-0' . $month  . '-31'];
            } else {
                $array = [$Y . '-' . $month . '-1', $Y . '-' . $month  . '-31'];
            }
        } else if ($month == 2) {
            if ($isLeapYear) {
                if (strlen($month) == 1) {
                    $array = [$Y . '-0' . $month  . '-1', $Y . '-0' . $month  . '-29'];
                } else {
                    $array = [$Y . '-' . $month  . '-1', $Y . '-' . $month  . '-29'];
                }
            } else {
                if (strlen($month) == 1) {
                    $array = [$Y . '-0' . $month  . '-1', $Y . '-0' . $month  . '-28'];
                } else {
                    $array = [$Y . '-' . $month  . '-1', $Y . '-' . $month  . '-28'];
                }
            }
        } else {
            if (strlen($month) == 1) {
                $array = [$Y . '-0' . $month  . '-1', $Y . '-0' . $month  . '-30'];
            } else {
                $array = [$Y . '-' . $month  . '-1', $Y . '-' . $month  . '-30'];
            }
        }
        return  $array;
    }
    //hanh dong tim kiem
    static function getMovieBySearch($search)
    {
        $value = self::where('name', 'like', '%' . $search . '%')
            ->get();
        return $value;
    }

    //lay du lieu de do qua form loc phim!
    static function sendDataForFilmFilter()
    {
        $value = self::getDataForFilmFilter();
        return $value;
    }

    static function getDataForFilmFilter()
    {
        $array = [];
        $genre = null;
        $country = null;
        $yearPublish = null;
        $genre = DB::table('genreses')->get();
        $country = self::select(self::raw('movies.country as country'))
            ->groupBy('country')
            ->get();
        $yearPublish = self::select(self::raw('movies.publish_year as publish_year'))
            ->groupBy('publish_year')
            ->orderBy('publish_year', 'DESC')->get();
        array_push($array, $genre);
        array_push($array, $country);
        array_push($array, $yearPublish);
        return $array;
    }

    static function filmFilterActivity($request)
    {
        $requestValue = [];
        $value = null;
        $array = [];
        $valueInput = $request;
        $valueFilter = self::getDataForFilmFilter();
        if ($request->country == 0 || $request->genre == 0 || $request->yearPublish == 0) {
            if ($request->country == 0) {
                array_push($array, 0);
            } else {
                array_push($requestValue, $request->country);
            }
            if ($request->genre == 0) {
                array_push($array, 1);
            } else {
                array_push($requestValue, $request->genre);
            }
            if ($request->yearPublish == 0) {
                array_push($array, 2);
            } else {
                array_push($requestValue, $request->yearPublish);
            }

            if (count($array) == 1) {
                if ($array[0] == 0) {
                    //Country is null
                    $value = self::getMoviesByPublishYearAndGenre($request);
                } else if ($array[0] == 1) {
                    //genre is null
                    $value = self::getMoviesByPublishYearAndCountry($request);
                } else {
                    //publishYear is null
                    $value = self::getMoviesByGenreAndCountry($request);
                }
            } else if (count($array) == 2) {
                if ($array[0] == 0 && $array[1] == 1) {
                    //Country and genre in null
                    $value = self::getMoviesByPublishYear($request);
                } else if ($array[0] == 1 && $array[1] == 2) {
                    //genre and public in null
                    $value = self::getMoviesByCountry($request);
                } else {
                    //country and public in null
                    $value = self::getMoviesByGenre($request);
                }
            } else {
                return ['genres' => $valueFilter[0], 'countries' => $valueFilter[1], 'yearPublish' => $valueFilter[2], 'defects' => true];
            }
        } else {
            $value = self::getMoviesHave3Conditions($request);
        }
        return ['value' => $value, 'genres' => $valueFilter[0], 'countries' => $valueFilter[1], 'yearPublish' => $valueFilter[2], 'requestValue' => $requestValue, 'oldInput' => $valueInput];
    }

    static function getMoviesByPublishYearAndGenre($request)
    {
        $value = self::join('genreses_movies', 'movies.id', '=', 'genreses_movies.move_id')
            ->where('genreses_movies.genres_id', '=', $request->genre)
            ->where('movies.publish_year', '=', $request->yearPublish)
            ->get();
        return $value;
    }

    static function getMoviesByPublishYearAndCountry($request)
    {
        $value = self::where('movies.publish_year', '=', $request->yearPublish)
            ->where('movies.country', '=', $request->country)
            ->select(self::raw('movies.image as image'), self::raw('movies.id as move_id'), self::raw('movies.name as name'))
            ->get();
        return $value;
    }


    static function getMoviesByGenreAndCountry($request)
    {
        $value = null;
        $value = self::join('genreses_movies', 'movies.id', '=', 'genreses_movies.move_id')
            ->where('genreses_movies.genres_id', '=', $request->genre)
            ->where('movies.country', '=', $request->country)
            ->select(self::raw('movies.image as image'), self::raw('movies.id as move_id'), self::raw('movies.name as name'))
            ->get();
        return $value;
    }


    static function getMoviesByPublishYear($request)
    {
        $value = null;
        $value = self::where('movies.publish_year', '=', $request->yearPublish)
            ->select(self::raw('movies.image as image'), self::raw('movies.id as move_id'), self::raw('movies.name as name'))
            ->get();
        return $value;
    }

    static function getMoviesByCountry($request)
    {
        $value = null;
        $value = self::where('movies.country', '=', $request->country)
            ->select(self::raw('movies.image as image'), self::raw('movies.id as move_id'), self::raw('movies.name as name'))
            ->get();
        return $value;
    }

    static function getMoviesByGenre($request)
    {
        $value = null;
        $value = self::join('genreses_movies', 'movies.id', '=', 'genreses_movies.move_id')
            ->where('genreses_movies.genres_id', '=', $request->genre)
            ->get();
        return $value;
    }

    static function getMoviesHave3Conditions($request)
    {
        $value = self::join('genreses_movies', 'movies.id', '=', 'genreses_movies.move_id')
            ->where('genreses_movies.genres_id', '=', $request->genre)
            ->where('movies.publish_year', '=', $request->yearPublish)
            ->where('movies.country', '=', $request->country)
            ->get();
        return $value;
    }
    static function searchMovie($search)
    {
        $value = null;
        $value = self::getMovieBySearch($search);
        return $value;
    }
}
