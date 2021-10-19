<?php

namespace App\Domain\Booking\Aggregate;

use App\Domain\Booking\Entity\Client;
use App\Domain\Booking\ValueObject\Tickets;

class ReservationTicket
{
    private string $id;
    private Client $client;
    private array $tickets;

    public function __construct(string $id, Client $client)
    {
        $this->id = $id;
        $this->client = $client;
    }

    public function addTickets(Tickets $tickets): void
    {
        $this->tickets->push($tickets);
        $this->tickets->getMovieSession()->reduceQuantityFreeTickets($tickets->getQuantity());
    }
}