<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifyModel extends Model
{
    protected $table = 'notify';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true;

    //------------------Chu Dinh Hanh -------------------//
    static function goNotify()
    {
        $id = 0;
        if (session()->has('user')) {
            $id = session()->get('user')->id;
        }
        $arr = self::where('user_id', $id)->get();
        return $arr;
    }

    static function deleteNotify($request)
    {
        $flag = 0;
        $_id = $request->id;
        $value = self::where('id', $_id)->delete();
        if ($value != 0) {
            $flag = 1;
        }
        $id = session()->get('id');
        $arr = self::where('user_id', $id)->get();
        return view('notify', ['notify' => $arr, 'flag' => $flag]);
    }
}
