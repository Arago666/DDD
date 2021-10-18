<?php


namespace App\Domain\Booking\Repository\Interfaces;

interface ClientRepositoryInterface
{
    public function create(string $id, Name $name, Phone $phone);
    public function findById(string $id);
}