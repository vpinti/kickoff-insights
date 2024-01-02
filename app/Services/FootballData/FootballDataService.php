<?php

namespace App\Services\FootballData;

use App\Services\FootballData\DataTransferObjects\AreaData;
use App\Services\FootballData\DataTransferObjects\AreaDetailData;
use App\Services\FootballData\DataTransferObjects\CompetitionData;
use App\Services\FootballData\DataTransferObjects\CompetitionDetailData;
use App\Services\FootballData\Requests\GetAreaRequest;
use App\Services\FootballData\Requests\GetAreasRequest;
use App\Services\FootballData\Requests\GetCompetitionRequest;
use App\Services\FootballData\Requests\GetCompetitionsRequest;
use Illuminate\Support\Collection;

class FootballDataService
{
    /**
     * @return Collection<AreaData>
     */
    public function areas(): Collection
    {
        return GetAreasRequest::build()
            ->send()
            ->throw()
            ->collect('areas')
            ->map(fn (array $data) => AreaData::fromArray($data));
    }

    public function area(int $id): AreaDetailData
    {
        $data = GetAreaRequest::build()
            ->withAreaId($id)
            ->send()
            ->throw()
            ->json();

        return AreaDetailData::fromArray($data);
    }

    /**
     * @return Collection<CompetitionData>
     */
    public function competitions(): Collection
    {
        return GetCompetitionsRequest::build()
            ->send()
            ->throw()
            ->collect('competitions')
            ->map(fn (array $data) => CompetitionData::fromArray($data));
    }

    public function competition(string $codeId): CompetitionDetailData
    {
        $data = GetCompetitionRequest::build()
            ->withCodeId($codeId)
            ->send()
            ->throw()
            ->json();

        return CompetitionDetailData::fromArray($data);
    }

}
