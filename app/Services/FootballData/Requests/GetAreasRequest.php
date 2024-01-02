<?php

namespace App\Services\FootballData\Requests;

class GetAreasRequest extends FootballDataRequest
{
    protected string $method = 'GET';
    protected string $path = 'areas';
}
