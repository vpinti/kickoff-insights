<?php

namespace App\Services\FootballData\Exceptions;

use Exception;

class FootballDataRequestException extends Exception
{
    public static function areaNotFound(string $id): self
    {
        return new self("Area not found with id: $id");
    }

    public static function unknownError(string $message): self
    {
        return new self("Unknown error with message: $message");
    }
}
