<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = "roles";
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
            $role = $this->findById($requestObject->id);
        } else {
            $role = new RoleModel();
        }

        $role->name = $requestObject->name;
        $role->code = $requestObject->code;
        $role->save();

        return response()->json($role, 201, [
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