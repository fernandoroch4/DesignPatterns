<?php

namespace FactoryMethod;

require_once 'Product/CarProduct.php';
require_once 'Product/DodgeCharger.php';
require_once 'Product/DodgeDart.php';
require_once 'CarFactory.php';

use FactoryMethod\Product\CarProduct;
use FactoryMethod\Product\DodgeDart;
use FactoryMethod\Product\DodgeCharger;

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