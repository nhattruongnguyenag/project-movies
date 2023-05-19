<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        return $this->belongsToMany(RoleModel::class, "users_roles", "user_id", "role_id");
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
            $user = $this->findById($requestObject->id);
            $user->roles()->detach();
            $user->status = $requestObject->status;
            $user->password = Hash::make($requestObject->password);
        } else {
            $user = new UserModel();
            $user->status = self::ACTIVE_STATUS;
            $user->password = Hash::make(self::DEFAULT_PASSWORD);
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
    }
}