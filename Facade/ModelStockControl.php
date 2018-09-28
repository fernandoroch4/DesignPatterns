<?php

namespace DesignPatterns\Facade;

class ModelStockControl
{
    public function registerOut(string $bookCod, int $customerId): bool
    {
        return true;
    }

    public function validateStock(string $bookCod)
    {
        echo "Register out successfully.\n";
        return true;
    }
}