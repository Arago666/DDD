<?php

namespace App\Domain\Booking\Entity;

use App\Domain\Booking\ValueObject\Name;
use App\Domain\Booking\ValueObject\Phone;

class Client
{
    private string $id;
    private Name $name;
    private Phone $phone;

    public function __construct(string $id, Name $name, Phone $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
    }
}