<?php
namespace FactoryMethod;
use FactoryMethod\Product\CarProduct;
use FactoryMethod\Product\TeslaModelS;
use FactoryMethod\Product\TeslaModelX;

class TeslaFactory implements CarFactory
{
    public function createCar(string $carmodel): FactoryMethod\Product\CarProduct
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