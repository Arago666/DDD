<?php

namespace App\Domain\Booking\TransferObject;

class MovieDateDto
{
    private string  $startTime;
    private string  $endTime;
    private int $durationInMinutes;

    public static function fromArray($data)
    {
        $self = new self();

        $self->startTime = $data['startTime'];
        $self->endTime = $data['endTime'];
        $self->durationInMinutes = $data['durationInMinutes'];

        return $self;
    }
}