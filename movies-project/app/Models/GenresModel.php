<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenresModel extends Model
{
    protected $table = "genreses";
    public $incrementing = true;
    protected $hidden = ["pivot", "created_at", "updated_at"];

    function findAll($orderBy, $orderName)
    {
        return self::orderBy($orderBy, $orderName)->get();
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

        return response([
            "msg" => "Xoa thanh cong"
        ], 200);
    }
}
