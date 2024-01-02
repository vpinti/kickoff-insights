<?php

namespace App\Services\FootballData\Requests;

class GetCompetitionsRequest extends FootballDataRequest
{
    protected string $method = 'GET';
    protected string $path = 'competitions';
}
