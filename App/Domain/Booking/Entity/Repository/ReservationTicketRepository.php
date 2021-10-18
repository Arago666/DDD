<?php

namespace App\Domain\Booking\Repository;

use App\Domain\Booking\Repository\Interfaces\ReservationTicketRepositoryInterface;
use App\Domain\Booking\Aggregate\ReservationTicket;
use App\Domain\Booking\ValueObject\Tickets;

class ReservationTicketRepository implements ReservationTicketRepositoryInterface
{
    private Connection $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function create(ReservationTicket $reservation)
    {
        //TODO вставить запись в базу данных
    }

    public function findById($id)
    {
        //TODO найти элемент
    }

    public function addTicket($id, Tickets $tickets)
    {
        //TODO добавить элемент в базу
    }
}