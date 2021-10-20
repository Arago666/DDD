<?php

namespace App\Domain\Booking\Entity;

use App\Domain\Booking\Entity\ValueObject\Name;
use Ramsey\Uuid\Uuid;

class Client
{
    private string $id;
    private Name $name;
    private string $phone;

    public function __construct(Name $name, string $phone)
    {
        $this->id = Uuid::uuid1();
        $this->name = $name;
        $this->phone = $phone;
    }
}