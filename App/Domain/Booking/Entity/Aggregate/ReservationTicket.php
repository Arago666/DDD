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
        //TODO проверить, что необходимое количество билетов есть
        $this->tickets->push($tickets);
        //TODO уменьшить количество свободных мест
//        $this->tickets->movieSession->quantityFreeTickets = $this->tickets->movieSession->quantityFreeTickets - $this->tickets->quantity;
    }

}