<?php

namespace App\Domain\Booking\ValueObject;

use App\Domain\Booking\Entity\MovieSession;
use \Exception;

class Tickets
{
    private MovieSession $movieSession;
    private int $quantity;

    public function __construct(MovieSession $movieSession, int $quantity = 1)
    {
        if(!$this->validateQuantity($movieSession, $$quantity)) {
           throw new Exception();
        }

        $this->movieSession = $movieSession;
        $this->quantity = $quantity;
    }

    private function validateQuantity(MovieSession $movieSession, int $quantity)
    {
        return $this->isFreeTickets($movieSession, $quantity) && ($quantity > 0);
    }

    private function isFreeTickets(MovieSession $movieSession, int $quantity)
    {
        return ($movieSession->getQuantityFreeTickets() - $quantity) > 0;
    }


}