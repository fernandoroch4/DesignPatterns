<?php

namespace FactoryMethod;

require_once 'Product/CarProduct.php';
require_once 'Product/TeslaModelS.php';
require_once 'Product/TeslaModelX.php';
require_once 'CarFactory.php';

use FactoryMethod\Product\CarProduct;
use FactoryMethod\Product\TeslaModelS;
use FactoryMethod\Product\TeslaModelX;

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