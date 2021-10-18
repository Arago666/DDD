<?php

namespace App\Domain\Booking\Repository\Interfaces;

use App\Domain\Booking\Aggregate\ReservationTicket;
use App\Domain\Booking\ValueObject\Tickets;

interface ReservationTicketRepositoryInterface
{
    public function create(ReservationTicket $reservation);
    public function findById($id);
    public function addTicket($id, Tickets $tickets);
}