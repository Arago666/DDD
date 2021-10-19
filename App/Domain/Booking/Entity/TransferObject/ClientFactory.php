<?php

namespace App\Domain\Booking\TransferObject;

use App\Domain\Booking\Entity\Client;

class ClientFactory
{
    public static function fromArray(array $data): Client
    {
        $client = new Client();
        $client->setId($data['id']);
        $client->setName($data['name']);
        $client->setPhone($data['phone']);

        return $client;
    }
}