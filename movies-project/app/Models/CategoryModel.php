<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = "categories";
    public $incrementing = true;
    protected $hidden = ["created_at", "updated_at"];

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
            $category = $this->findById($requestObject->id);
        } else {
            $category = new CategoryModel();
        }

        $category->name = $requestObject->name;
        $category->save();

        return response()->json($category, 201, [
            "Content-Type" => "application/json"
        ]);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);

        return response([
            "msg" => "Xoa thanh cong"
        ], 200);
    }
}