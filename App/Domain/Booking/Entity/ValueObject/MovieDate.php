<?php

namespace App\Domain\Booking\ValueObject;

class MovieDate
{
    private string  $startTime;
    private string  $endTime;
    private int $durationInMinutes;

    public function __construct(string $startTime, string $endTime, int $durationInMinutes)
    {
        $this->startTime = $this->validateTime($startTime);
        $this->endTime = $this->validateTime($endTime);
        $this->durationInMinutes = $this->validateDurationInMinutes($durationInMinutes);
    }

    private function validateTime(string $time): string
    {
        //validation

        return $time;
    }

    private function validateDurationInMinutes(int $durationInMinutes): int
    {
        //validation

        return $durationInMinutes;
    }
}