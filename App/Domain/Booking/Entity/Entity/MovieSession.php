<?php

namespace App\Domain\Booking\Entity;

use App\Domain\Booking\ValueObject\MovieDate;

class MovieSession
{
    private string $id;
    private string $name;
    private MovieDate $movieDate;
    private int $quantityFreeTickets;


    public function __construct(string $id, string $name, MovieDate $movieDate, int $quantityFreeTickets)
    {
        $this->id = $id;
        $this->name = $name;
        $this->movieDate = $movieDate;
        $this->quantityFreeTickets = $quantityFreeTickets;
    }

    public function getQuantityFreeTickets(): int
    {
        return $this->quantityFreeTickets;
    }
}