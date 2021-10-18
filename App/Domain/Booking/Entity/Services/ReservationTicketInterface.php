<?php

namespace App\Domain\Booking\Services;

interface ReservationTicketInterface
{
    public function create(string $clientId);
    public function addTicket(string $id, $ticket);
}