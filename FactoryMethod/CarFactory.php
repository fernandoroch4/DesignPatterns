<?php
namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Product\CarProduct;

interface CarFactory
{
    public function createCar(string $carmodel): CarProduct;
}