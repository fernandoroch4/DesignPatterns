<?php
namespace FactoryMethod\Product;

class TeslaModelX implements CarProduct
{
    public function speed()
    {
        echo "Speed up Tesla Model X";
    }
    public function brake()
    {
        echo "Braking Tesla Model X";
    }
    public function switchGear()
    {
        echo "Switching gear Tesla Model X";
    }
}
