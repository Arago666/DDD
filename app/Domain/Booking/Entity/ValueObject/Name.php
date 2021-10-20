<?php

namespace App\Domain\Booking\Entity\ValueObject;

class Name
{
    private string $firstName;

    public function __construct(string $firstName)
    {
        $this->firstName = $this->validateFirstName($firstName);
    }

    private function validateFirstName(string $firstName): string
    {
        return $firstName;
    }
}