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
}
