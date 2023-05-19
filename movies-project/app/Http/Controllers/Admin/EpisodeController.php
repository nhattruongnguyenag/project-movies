<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    function listPage()
    {
        return view('admin.episodes.episodes-list', [
            'active' => 'episodes-list',
            'formEditUri' => 'episodes-edit'
        ]);
    }

    function editPage()
    {
        return view('admin.episodes.episodes-edit');
    }
}
