<?php
namespace FactoryMethod;
use FactoryMethod\Product\CarProduct;
use FactoryMethod\Product\DodgeDart;
use FactoryMethod\Product\DodgeCharger;

class DodgeFactory implements CarFactory
{
    public function createCar(string $carmodel): FactoryMethod\Product\CarProduct
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