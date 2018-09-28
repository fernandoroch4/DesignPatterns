<?php

namespace DesignPatterns\Facade;

class ModelCustomersControl
{
    public function findCustomer(string $customerId): array
    {
        // Simulate
        return [
            'id' => 12345,
            'name' => 'Spider-Man',
            'mail' => 'spider-man@hollywood.com'
        ];
    }
}