<?php

namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Product\CarProduct;
use DesignPatterns\FactoryMethod\Product\TeslaModelS;
use DesignPatterns\FactoryMethod\Product\TeslaModelX;
use DesignPatterns\FactoryMethod\CarFactory;

class TeslaFactory implements CarFactory
{
    public function createCar(string $carmodel): CarProduct
    {
        if ($carmodel == 'x_model') {
            return new TeslaModelX();
        } elseif ($carmodel == 's_model') {
            return new TeslaModelS();
        } else {
            throw new \Exception("Model {$carmodel} not exist");
        }
    }
}