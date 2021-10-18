<?php

namespace App\Domain\Booking\ValueObject;

class Name
{
    private string $name;

    public function __construct(string $name)
    {
        $this->$name = $this->validateNumber($name);
    }

    private function validateNumber(string $name): string
    {
        //validation

        return $name;
    }
}