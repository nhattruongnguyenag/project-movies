<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\EpisodeResource;
use App\Models\EpisodeModel;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    private $episodeModel;
    private $movieModel;

    private const ADMIN_EPISODES_PERPAGE = 5;

    function __construct()
    {
        $this->episodeModel = new EpisodeModel();
        $this->movieModel = new MovieModel();
    }

    function listPage()
    {
        return view("admin.episodes.episodes-list", [
            "active" => "episodes",
            "formEditUri" => "episodes-edit",
            "episodes" => $this->episodeModel->findWithPagination(self::ADMIN_EPISODES_PERPAGE, "id", "DESC"),
            "currentPage" => "Danh sách tập phim",
            "title" => "Danh sách tập phim"
        ]);
    }

    function editPage(Request $request)
    {
        if (isset($request->id)) {
            $episode = $this->episodeModel->findById($request->id);
        }

        $movies = $this->movieModel->findAll("name", "ASC");

        return view("admin.episodes.episodes-edit", [
            "active" => "episodes",
            "episode" => isset($episode) ? new EpisodeResource($episode) : null,
            "movies" => $movies,
            "currentPage" => isset($episode)  ? "Cập nhật tập phim" : "Thêm tập phim",
            'linkedPage' => [
                'link' => route("episodes"),
                'name' => 'Danh sách tập phim'
            ],
            "title" => isset($episode)  ? "Cập nhật tập phim" : "Thêm tập phim"
        ]);
    }

    function updateAPI(Request $request)
    {
        return $this->episodeModel->saveOrUpdate($request);
    }

    function saveAPI(Request $request)
    {
        return $this->episodeModel->saveOrUpdate($request);
    }
}
