<?php

namespace App\Http\Controllers;

use App\Services\FootballData\FootballDataService;

class AreaController extends Controller
{
    public function index(FootballDataService $fd)
    {
        dd($fd->areas());
    }

    public function show(int $id, FootballDataService $fd)
    {
        dd($fd->area($id));
    }
}
