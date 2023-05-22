<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //Lay top view nhieu nhat tu truoc den nay!
    public function getTheMostTopViewEveryTime()
    {
        $value = DB::table('user_movies')
            ->join('movies', 'user_movies.movie_id', '=', 'movies.id')
            ->select(DB::raw('movies.image as image'), DB::raw('movie_id as movie_id'), DB::raw('movies.name as name'), DB::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }


    //Lay top view nhieu nhat trong ngay!
    public function getTheMostTopViewInDay()
    {
        $date = date('Y-m-d');
        $value = DB::table('user_movies')
            ->join('movies', 'user_movies.movie_id', '=', 'movies.id')
            ->where('user_movies.watching_time', '=', $date . '')
            ->select(DB::raw('movies.image as image'), DB::raw('movie_id as movie_id'), DB::raw('movies.name as name'), DB::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }

    //Lay top view nhieu nhat trong tuan!
    public function getTheMostTopViewInWeek()
    {
        $result = null;
        $today = Carbon::now('Asia/Ho_Chi_Minh');
        $to = $today->format('Y-m-d');
        // DOW = Day Of Week!
        $DOW = $today->dayOfWeek;
        switch ($DOW) {
            case '0':
                $from =  $today->subDays(6)->format('Y-m-d');
                $result = $this->calculateDayInAWeek($from, $to);
                break;
            case '1':
                $from =  $today->subDays(5)->format('Y-m-d');
                $result =  $this->calculateDayInAWeek($from, $to);
                break;
            case '2':
                $from =  $today->subDays(4)->format('Y-m-d');
                $result = $this->calculateDayInAWeek($from, $to);
                break;
            case '3':
                $from =  $today->subDays(3)->format('Y-m-d');
                $result = $this->calculateDayInAWeek($from, $to);
                break;
            case '4':
                $from =  $today->subDays(2)->format('Y-m-d');
                $result =  $this->calculateDayInAWeek($from, $to);
                break;
            case '5':
                $from =  $today->subDays(1)->format('Y-m-d');
                $result = $this->calculateDayInAWeek($from, $to);
                break;
            case '6':
                $result = $this->calculateDayInAWeek($to, $to);
                break;
        }
        return $result;
    }

    public function calculateDayInAWeek($form, $to)
    {
        $value = DB::table('user_movies')
            ->join('movies', 'user_movies.movie_id', '=', 'movies.id')
            ->whereBetween('user_movies.watching_time', [$form, $to])
            ->select(DB::raw('movies.image as image'), DB::raw('movie_id as movie_id'), DB::raw('movies.name as name'), DB::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }


    //Lay top view nhieu nhat trong thang!
    public function getTheMostTopViewInMonth()
    {
        $flag = $this->getLeapYear();
        $month = (int)date('m');
        $arrayDateFromAndTo = $this->getNumberDayInYear($month, $flag);
        $value = DB::table('user_movies')
            ->join('movies', 'user_movies.movie_id', '=', 'movies.id')
            ->whereBetween('user_movies.watching_time', [$arrayDateFromAndTo[0], $arrayDateFromAndTo[1]])
            ->select(DB::raw('movies.image as image'), DB::raw('movie_id as movie_id'), DB::raw('movies.name as name'), DB::raw('count(*) as view_count'))
            ->groupBy('movie_id')
            ->orderBy('view_count', 'DESC')
            ->limit(7)
            ->get();
        return $value;
    }



    public function getLeapYear()
    {
        $flag = false;
        $year = (int)date('Y');
        if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0 && $year % 100 != 0)) {
            $flag = true;
        }
        return  $flag;
    }

    public function getNumberDayInYear($month, $isLeapYear)
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

    public function getMovieBySearch(Request $request)
    {
        $value = DB::table('movies')
            ->where('name', 'like', '%' . $request->name . '%')
            ->get();
        return $value;
    }
}
