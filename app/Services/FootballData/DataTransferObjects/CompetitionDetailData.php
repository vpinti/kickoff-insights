<?php

declare(strict_types=1);

namespace App\Services\FootballData\DataTransferObjects;

class CompetitionDetailData
{
    public function __construct(
        public readonly int $id,
        public readonly AreaDetailData $area,
        public readonly string $name,
        public readonly string $code,
        public readonly string $type,
        public readonly ?string $emblem,
        public readonly SeasonData $currentSeason,
        public readonly array $seasons
    ) { }

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            area: AreaDetailData::fromArray($data['area']),
            name: $data['name'],
            code: $data['code'],
            type: $data['type'],
            emblem: $data['emblem'] ?? null,
            currentSeason: SeasonData::fromArray($data['currentSeason']),
            seasons: $data['seasons'] ?? [],
        );
    }
}

