<?php

namespace App\Domain\Booking\Entity\TransferObject;

use App\Domain\Booking\Entity\Entity\Client;

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