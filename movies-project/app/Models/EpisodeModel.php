<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EpisodeModel extends Model
{
    protected $table = "episodes";
    public $incrementing = true;

    function movie()
    {
        return $this->hasOne(MovieModel::class, "id", "move_id");
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
            $episode = $this->findById($requestObject->id);
        } else {
            $episode = new EpisodeModel();
        }

        $episode->move_id  = $requestObject->move_id;
        $episode->link = $requestObject->link;
        $episode->episode = $requestObject->episode;
        $episode->trailer = $requestObject->trailer;
        $episode->type = $requestObject->type;
        $episode->save();

        return response($episode, 201);
    }

    function deleteByIds($ids)
    {
        self::destroy($ids);
    }
}