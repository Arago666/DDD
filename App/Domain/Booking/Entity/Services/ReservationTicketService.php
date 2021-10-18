<?php

namespace App\Domain\Booking\Services;

use App\Domain\Booking\Aggregate\ReservationTicket;
use App\Domain\Booking\Repository\Interfaces\ClientRepositoryInterface;
use App\Domain\Booking\Repository\Interfaces\ReservationTicketRepositoryInterface;

class ReservationTicketService implements ReservationTicketInterface
{
    private ClientRepositoryInterface $clientRepository;
    private  ReservationTicketRepositoryInterface $reservationTicketRepository;

    public function __construct(ClientRepositoryInterface $clientRepository, ReservationTicketRepositoryInterface $reservationTicketRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->reservationTicketRepository = $reservationTicketRepository;
    }

    public function create(string $clientId): void
    {
        $client = $this->clientRepository->findById($clientId);
        $reservationTicket = new ReservationTicket('1', $client);
        $this->reservationTicketRepository->create($reservationTicket);
    }

    public function addTicket($id, $ticket)
    {
        $this->reservationTicketRepository->addTicket($id, $ticket);
    }
}