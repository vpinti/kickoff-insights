<?php

namespace App\Services\FootballData\DataTransferObjects;

/**
 * Class AreaData
 *
 * Represents the data transfer object for an area.
 */
class CompetitionData
{
    /**
     * Create a new AreaData instance.
     *
     * @param int $id The ID of the area.
     * @param string $name The name of the area.
     * @param string $countryCode The country code of the area.
     * @param string|null $flag The flag of the area.
     * @param int|null $parentAreaId The ID of the parent area.
     * @param string|null $parentArea The name of the parent area.
     */
    public function __construct(
        public readonly int $id,
        public readonly AreaDetailData $area,
        public readonly string $name,
        public readonly ?string $code,
        public readonly string $type,
        public readonly ?string $emblem,
        public readonly ?string $plan,
        public readonly ?SeasonData $currentSeason,
        public readonly int $numberOfAvailableSeasons,
        public readonly \DateTime $lastUpdated
    ) { }

    /**
     * Create an AreaData instance from an array of data.
     *
     * @param array $data The array of data.
     * @return self The created AreaData instance.
     */
    public static function fromArray(array $data): self
    {
        $lastUpdated = \DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $data['lastUpdated']);

        return new self(
            id: $data['id'],
            area: AreaDetailData::fromArray($data['area']),
            name: $data['name'],
            code: $data['code'] ?? null,
            type: $data['type'],
            emblem: $data['emblemUrl'] ?? null,
            plan: $data['plan'] ?? null,
            currentSeason: SeasonData::fromArray($data['currentSeason']),
            numberOfAvailableSeasons: $data['numberOfAvailableSeasons'],
            lastUpdated: $lastUpdated,
        );
    }
}
