<?php
namespace FactoryMethod\Product;

class TeslaModel implements CarProduct
{
    public function speed()
    {
        echo 'Speed Tesla Model...';
    }
    public function brake()
    {
        echo 'Brake Tesla Model...';
    }
    public function switchGear()
    {
        echo 'Switch gear on Tesla Model...';
    }
}
