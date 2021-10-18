<?php

namespace App\Domain\Booking\ValueObject;

class Phone
{
    private string $number;

    public function __construct(string $number)
    {
        $this->number = $this->validateNumber($number);
    }

    private function validateNumber(string $number): string
    {
        //validation

        return $number;
    }
}