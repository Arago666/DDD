<?php

namespace App\Domain\Booking\Aggregate;

use App\Domain\Booking\Entity\Client;
use App\Domain\Booking\Entity\Movie;
use http\Exception\InvalidArgumentException;
use Ramsey\Uuid\Uuid;
use \DateTime;
use \DateInterval;

class MovieSession
{
    private string $id;
    private Movie $movie;
    private DateTime $startTime;
    private int $quantityTickets;
    private array $tickets;

    public function __construct(Movie $movie, DateTime $startTime, int $quantityTickets)
    {
        $this->id = Uuid::uuid1();;
        $this->movie = $movie;
        $this->startTime = $startTime;
        $this->quantityTickets = $quantityTickets;
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function addTickets(Client $client): void
    {
        if (!$this->isFreeTicket()) {
            throw new InvalidArgumentException("Отсутсвуют свободные билеты");
        }

        $this->tickets->push($client);
    }

    public function isFreeTicket(): bool
    {
        return $this->getQuantityFreeTickets() > 0;
    }

    public function getQuantityFreeTickets(): int
    {
        return $this->quantityTickets - count($this->tickets);
    }

    public function getEndTime(): DateTime
    {
        $durationInMinutes = new DateInterval('PT' . $this->movie->getDurationInMinutes() . 'M');

        return $this->startTime->add($durationInMinutes);
    }
}