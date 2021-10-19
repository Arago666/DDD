<?php

namespace App\Domain\Booking\Entity;

class MovieSession
{
    private string $id;
    private string $name;
    private string $startTime;
    private string $endTime;
    private int $quantityFreeTickets;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function setQuantityFreeTickets(int $quantityFreeTickets): void
    {
        $this->quantityFreeTickets = $quantityFreeTickets;
    }

    public function getQuantityFreeTickets(): int
    {
        return $this->quantityFreeTickets;
    }

    public function getDurationInMinutes(): int
    {
        return (int)(strtotime($this->startTime) - strtotime($this->endTime)) * 60;
    }

    public function reduceQuantityFreeTickets(int $quantityTickets): void
    {
        $this->quantityFreeTickets = $this->quantityFreeTickets - $quantityTickets;
    }
}