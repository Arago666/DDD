<?php

namespace App\Domain\Booking\Entity\Entity;

class Client
{
    private string $id;
    private string $name;
    private string $phone;

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}