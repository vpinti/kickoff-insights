<?php

declare(strict_types=1);

namespace App\Services\FootballData\DataTransferObjects;

class AreaDetailData
{
    /**
     * Represents detailed information about a specific area.
     *
     * @param int $id The ID of the area.
     * @param string $name The name of the area.
     * @param string $code The code of the area.
     * @param string|null $flag The flag of the area.
     * @param int|null $parentAreaId The ID of the parent area.
     * @param string|null $parentArea The name of the parent area.
     * @param array|null $childAreas The child areas of the area.
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $code,
        public readonly ?string $flag,
        public readonly ?int $parentAreaId,
        public readonly ?string $parentArea,
        public readonly ?array $childAreas
    ) { }

    /**
     * Creates an instance of AreaDetailData from an array of data.
     *
     * @param array $data The data array.
     * @return AreaDetailData The created instance of AreaDetailData.
     */
    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            code: $data['code'],
            flag: $data['flag'] ?? null,
            parentAreaId: $data['parentAreaId'] ?? null,
            parentArea: $data['parentArea'] ?? null,
            childAreas: $data['childAreas'] ?? [],
        );
    }
}
