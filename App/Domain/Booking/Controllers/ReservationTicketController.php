<?php

namespace App\Domain\Booking\Controllers;

use App\Domain\Booking\Entity\MovieSession;
use App\Domain\Booking\Aggregate\ReservationTicket;
use App\Domain\Booking\Entity\Client;
use App\Domain\Booking\ValueObject\Tickets;

class ReservationTicketController
{
    public function actionCreate()
    {
        $client = new Client(1,"Artem", "89505941188");

        $movieSession = new MovieSession(1,"Человек-паук", 75, "14:30", 300);
        $quantity = 3;

        $reservation = new ReservationTicket(1, $client);

        $reservation->addTickets([new Tickets($movieSession, $quantity)]);
    }

}