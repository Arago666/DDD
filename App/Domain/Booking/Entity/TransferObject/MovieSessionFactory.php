<?php

namespace App\Domain\Booking\TransferObject;

use App\Domain\Booking\Entity\MovieSession;

class MovieSessionFactory
{
    public static function fromArray(array $data): MovieSession
    {
        $movieSession = new MovieSession();
        $movieSession->setId($data['id']);
        $movieSession->setName($data['name']);
        $movieSession->setStartTime($data['startTime']);
        $movieSession->setEndTime($data['endTime']);
        $movieSession->setQuantityFreeTickets($data['quantityFreeTickets']);

        return $movieSession;
    }
}