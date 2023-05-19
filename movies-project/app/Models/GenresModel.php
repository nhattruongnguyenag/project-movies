<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenresModel extends Model
{
    protected $table = "genreses";
    public $incrementing = true;
    protected $hidden = ["pivot", "created_at", "updated_at"];

    function findAll()
    {
        return self::all();
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
            $genres = $this->findById($requestObject->id);
        } else {
            $genres = new GenresModel();
        }

        $genres->name = $requestObject->name;
        $genres->save();

        return response($genres, 201);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);
    }
}
