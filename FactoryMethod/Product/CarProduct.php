<?php
namespace DesignPatterns\FactoryMethod\Product;

interface CarProduct
{
    public function speed();
    public function brake();
    public function switchGear();
}