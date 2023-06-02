<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true;



    //------------------Chu Dinh Hanh---------------------//
    static function init()
    {
        $user_id = 0;
        if (session()->has('user')) {
            $user_id = session()->get('user')->id;
        }
        $value = self::orderBy('view_count', 'DESC')
            ->orderBy('id', 'DESC')
            ->paginate(4);
        return (['blogs' => $value, 'user_id' => $user_id]);
    }

    //Read Blog
    static function readBlog($request)
    {
        $value = self::getBlog($request);
        //Convert array to object
        $value = self::convertArrayToObject($value);
        //Update view of this blog
        self::updateViewBlog($value->id, $value->view_count);
        return $value;
    }

    static function getBlog($request)
    {
        $value = self::join('users', 'users.id', '=', 'blogs.user_id')
            ->where('blogs.id', '=', $request->id)
            ->select(
                self::raw('blogs.id as id'),
                self::raw('blogs.view_count as view_count'),
                self::raw('blogs.title as title'),
                self::raw('blogs.time_create as time_create'),
                self::raw('blogs.image as image'),
                self::raw('blogs.content as content'),
                self::raw('users.username as username')
            )
            ->get();
        return $value;
    }

    static function convertArrayToObject($array)
    {
        $collection = collect($array);
        $item = $collection->first();
        return $item;
    }

    static function updateViewBlog($id, $view)
    {
        self::where('id', '=', $id)
            ->update(['view_count' => $view + 1]);
    }

    static function createBlog($request)
    {

        $user_id = 0;
        $data = $request;
        if (isset($data->id)) {
            //Update blog
            //1-img is changed
            if ($data->image == "") {
                $result =  self::where('id', $data->id)
                    ->update(['title' => $data->title_crik, 'content' => $data->content_crik]);
                if ($result != 0) {
                    // Complete update
                    return view('areaCreateBlog', ['defect' => 4]);
                } else {
                    // Cant update blog 
                    session()->flash('update_fail', 'Thông báo cập nhật không thành công!');
                    return self::editBlog($request);
                }
            } else {
                //2 - img no have changed
                $flag = self::checkImage($request);
                if ($flag) {
                    $fileName =  self::createfakeNameForImageToUpload($data);
                    self::saveLocalNameImage($request, $fileName);
                    $result =  self::where('id', $data->id)
                        ->update(['title' => $data->title_crik, 'content' => $data->content_crik, 'image' => $fileName]);
                    if ($result != 0) {
                        // Complete update
                        return view('areaCreateBlog', ['defect' => 4]);
                    } else {
                        // Cant update blog 
                        session()->flash('update_fail', 'Thông báo cập nhật không thành công!');
                        return self::editBlog($request);
                    }
                } else {
                    //Img not allow
                    return view('areaCreateBlog', ['defect' => 3]);
                }
            }
        } else {
            //Create blog
            if (trim($data->content_crik) == null || trim($data->title_crik) == null || trim($data->file('image')) == null) {
                //Have null variable
                return view('areaCreateBlog', ['defect' => 0, 'value' => $request]);
            } else {
                if (session()->has('user')) {
                    $user_id = session()->get('user')->id;
                }
                $flag = self::checkImage($request);
                if ($flag) {
                    $date = date('Y-m-d');
                    $fileName =  self::createfakeNameForImageToUpload($data);
                    self::saveLocalNameImage($request, $fileName);
                    //Create object
                    $object = new BlogModel();
                    $object->content = $data->content_crik;
                    $object->user_id = $user_id;
                    $object->image = $fileName;
                    $object->title = $data->title_crik;
                    $object->time_create = $date;
                    $result =  $object->save();
                    if ($result) {
                        // Complete
                        return view('areaCreateBlog', ['defect' => 1]);
                    } else {
                        // Cant create blog 
                        return view('areaCreateBlog', ['defect' => 2]);
                    }
                } else {
                    //Img not allow
                    return view('areaCreateBlog', ['defect' => 3]);
                }
            }
        }
    }

    static function createfakeNameForImageToUpload($request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        return  $filename;
    }

    static function saveLocalNameImage($request, $fileName)
    {
        $request->file('image')->move(public_path('images/'), $fileName);
    }

    static function checkImage($request)
    {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $allow_ext = ['png', 'jpg', 'jpeg'];
        if (!in_array($ext, $allow_ext)) {
            return false;
        } else {
            return true;
        }
    }

    static function deleteBlog($request)
    {
        $result = self::where('id', '=', $request->id)
        ->delete();
        return $result;
    }

    static function editBlog($request)
    {
        $value = self::getBlog($request);
        $value = self::convertArrayToObject($value);
        return $value;
    }
}
