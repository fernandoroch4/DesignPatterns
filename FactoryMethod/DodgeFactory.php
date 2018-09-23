<?php

namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Product\CarProduct;
use DesignPatterns\FactoryMethod\Product\DodgeCharger;
use DesignPatterns\FactoryMethod\Product\DodgeDart;
use DesignPatterns\FactoryMethod\CarFactory;

class DodgeFactory implements CarFactory
{
    public function createCar(string $carmodel): CarProduct
    {
        if ($carmodel == 'dart') {
            return new DodgeDart();
        } elseif ($carmodel == 'charger') {
            return new DodgeCharger();
        } else {
            throw new \Exception("Model {$carmodel} not exist");
        }
    }
}