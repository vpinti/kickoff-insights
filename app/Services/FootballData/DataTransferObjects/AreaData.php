<?php

namespace App\Services\FootballData\DataTransferObjects;

/**
 * Class AreaData
 *
 * Represents the data transfer object for an area.
 */
class AreaData
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
        public readonly string $name,
        public readonly string $countryCode,
        public readonly ?string $flag,
        public readonly ?int $parentAreaId,
        public readonly ?string $parentArea
    ) { }

    /**
     * Create an AreaData instance from an array of data.
     *
     * @param array $data The array of data.
     * @return self The created AreaData instance.
     */
    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            countryCode: $data['countryCode'],
            flag: $data['flag'] ?? null,
            parentAreaId: $data['parentAreaId'] ?? null,
            parentArea: $data['parentArea'] ?? null,
        );
    }
}
