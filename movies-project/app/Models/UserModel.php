<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{

    protected $table = "users";
    public $incrementing = true;
    private const DEFAULT_PASSWORD = "123456";
    private const ACTIVE_STATUS = "active";
    private const INACTIVE_STATUS = "inactive";

    function roles()
    {
        return self::belongsToMany(RoleModel::class, "users_roles", "user_id", "role_id");
    }

    function findWithPagination($offset, $orderBy, $orderName)
    {
        return self::orderBy($orderBy, $orderName)->paginate($offset);
    }

    function findById($id)
    {
        return self::find($id);
    }

    function saveOrUpdate($requestObject)
    {
        if (isset($requestObject->id)) {
            $user = self::findById($requestObject->id);
            $user->roles()->detach();
            $user->status = $requestObject->status;
            $user->password = Crypt::encrypt($requestObject->password);
        } else {
            $user = new UserModel();
            $user->status = self::ACTIVE_STATUS;
            $user->password = Crypt::encrypt(self::DEFAULT_PASSWORD);
            $user->username  = $requestObject->username;
            $user->email = $requestObject->email;
        }

        $user->save();
        $user->roles()->attach($requestObject->roles);

        return response($user, 201);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);

        return response([
            "msg" => "Xoa thanh cong"
        ], 200);
    }

    //---------Chu Dinh Hanh ------------------------//
    static function getUser()
    {
        if (session()->has('user')) {
            $user_id = session()->get('user')->id;
            $userIn4 = self::find($user_id);
            $countMovie =  self::getCountMovieOfUser($user_id);
            $countLike = self::getCountLike($user_id);
            $arr = self::getCountMovieWatchedOfUser($user_id);
            //Bin defaul data img.
            if ($userIn4->image == "" || empty(trim($userIn4->image))) {
                $userIn4->image = "1685086171.png";
            }
            return ['user' => $userIn4, 'countMovie' => $countMovie, 'countLike' => $countLike, 'arr' => $arr];
        }
    }

    static function getCountMovieOfUser($id)
    {
        $movie = null;
        $movie = DB::table('users_movies')
            ->where('users_movies.user_id', $id)
            // ->select(DB::raw('user_movies.movie_id'))
            // ->groupBy('user_movies.movie_id')
            ->count();
        return $movie;
    }

    static function getCountLike($id)
    {
        $like = null;
        $like = DB::table('movies_likes')->where('id_user', $id)->count();
        return $like;
    }


    //Lay top view nhieu nhat trong thang!
    static function getCountMovieWatchedOfUser($id)
    {
        $year = date('Y');
        $arr = [];
        for ($month = 1; $month <= 12; $month++) {
            $records = DB::table('users_movies')
                ->whereYear('watching_time', $year)
                ->whereMonth('watching_time', $month)
                ->where('user_id', $id)
                ->count();
            array_push($arr, $records);
            // array_push($arr, count($records));
        }
        $arr = implode(',', $arr);
        return $arr;
    }
}
