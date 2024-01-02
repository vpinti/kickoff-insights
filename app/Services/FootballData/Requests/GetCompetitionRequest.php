<?php

namespace App\Services\FootballData\Requests;

use Illuminate\Support\Str;

class GetCompetitionRequest extends FootballDataRequest
{
    protected string $method = 'GET';
    protected string $path = 'competitions/%s';

    public function withCodeId(string $codeId): self
    {
        return $this->setPath(sprintf($this->path, Str::upper($codeId)));
    }
}
