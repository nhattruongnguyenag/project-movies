<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    protected $table = "movies";
    public $incrementing = true;

    function genreses()
    {
        return $this->belongsToMany(GenresModel::class, "genreses_movies", "movie_id", "genres_id");
    }

    function category()
    {
        return $this->hasOne(CategoryModel::class, "id", "category_id");
    }

    function findWithPagination($offset)
    {
        return self::paginate($offset);
    }

    function findById($id)
    {
        return self::find($id);
    }

    function saveOrUpdate($requestObject)
    {
        if (isset($requestObject->id)) {
            $movie = $this->findById($requestObject->id);
            $movie->genreses()->detach();
        } else {
            $movie = new MovieModel();
        }

        $movie->actor = $requestObject->actor;
        $movie->name = $requestObject->name;
        $movie->director = $requestObject->director;
        $movie->description = $requestObject->description;
        $movie->status = $requestObject->status;
        $movie->image = $requestObject->image;
        $movie->category_id  = $requestObject->category_id;
        $movie->country = $requestObject->country;
        $movie->duration = $requestObject->duration;
        $movie->publish_year = $requestObject->publish_year;
        $movie->image     = $requestObject->image;
        $movie->save();

        $movie->genreses()->attach($requestObject->genresIds);

        return response($movie, 201);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);
    }
}