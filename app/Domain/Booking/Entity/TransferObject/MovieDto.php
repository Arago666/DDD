<?php

namespace App\Domain\Booking\Entity\TransferObject;

class MovieDto
{
    private string $name;
    private int $durationInMinutes;

    /**
     * @psalm-param array{name:string, durationInMinutes:int} $data
     */
    public function load(array $data): void
    {
        $this->name = $data['name'];
        $this->durationInMinutes = $data['durationInMinutes'];
    }
}