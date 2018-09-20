<?php
namespace FactoryMethod\Product;

class TeslaModelS implements CarProduct
{
    public function speed()
    {
        echo "Speed up Tesla Model X\n";
    }
    public function brake()
    {
        echo "Braking Tesla Model X\n";
    }
    public function switchGear()
    {
        echo "Switching gear Tesla Model X\n";
    }
}
