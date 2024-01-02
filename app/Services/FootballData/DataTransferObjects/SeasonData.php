<?php

namespace App\Services\FootballData\DataTransferObjects;

/**
 * Class SeasonData
 *
 * Represents the data transfer object for a season.
 */
class SeasonData
{
    /**
     * Create a new SeasonData instance.
     *
     * @param int $id The ID of the season.
     * @param \DateTime $startDate The start date of the season.
     * @param \DateTime $endDate The end date of the season.
     * @param int $currentMatchday The current matchday of the season.
     * @param string|null $winner The winner of the season.
     */
    public function __construct(
        public readonly int $id,
        public readonly \DateTime $startDate,
        public readonly \DateTime $endDate,
        public readonly ?int $currentMatchday,
        public readonly ?array $winner
    ) { }

    /**
     * Create a SeasonData instance from an array of data.
     *
     * @param array $data The array of data.
     * @return self The created SeasonData instance.
     */
    public static function fromArray(?array $data): self|null
    {
        if ($data === null) {
            // Gestire il caso in cui $data è null, ad esempio lanciare un'eccezione o restituire un valore predefinito.
            return null;
        }

        $startDate = \DateTime::createFromFormat('Y-m-d', $data['startDate']);
        $endDate = \DateTime::createFromFormat('Y-m-d', $data['endDate']);

        return new self(
            id: $data['id'],
            startDate: $startDate,
            endDate: $endDate,
            currentMatchday: $data['currentMatchday'] ?? null,
            winner: $data['winner'] ?? []
        );
    }
}
