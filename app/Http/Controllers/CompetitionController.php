<?php

namespace App\Http\Controllers;

use App\Services\FootballData\FootballDataService;

class CompetitionController extends Controller
{
    public function index(FootballDataService $fd)
    {
        dd($fd->competitions());
    }

    public function show(string $codeId, FootballDataService $fd)
    {
        dd($fd->competition($codeId));
    }
}
