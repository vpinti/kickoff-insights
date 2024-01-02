<?php

namespace App\Services\FootballData\Requests;

class GetAreaRequest extends FootballDataRequest
{
    protected string $method = 'GET';
    protected string $path = 'areas/%s';

    public function withAreaId(string $areaId): self
    {
        return $this->setPath(sprintf($this->path, $areaId));
    }
}
