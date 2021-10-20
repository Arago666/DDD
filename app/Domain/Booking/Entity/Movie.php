<?php

namespace App\Domain\Booking\Entity;

use Ramsey\Uuid\Uuid;

class Movie
{
    private string $id;
    private string $name;
    private int $durationInMinutes;

    public function __construct(string $name, int $durationInMinutes)
    {
        $this->id = Uuid::uuid1();
        $this->name = $name;
        $this->durationInMinutes = $durationInMinutes;
    }

    public function getDurationInMinutes(): int
    {
        return $this->durationInMinutes;
    }
}