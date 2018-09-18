<?php
namespace FactoryMethod\Product;

class DodgeCharger implements CarProduct
{
    public function speed()
    {
        echo "Speed up Dogde Charger";
    }
    public function brake()
    {
        echo "Brake Charger";
    }
    public function switchGear()
    {
        echo "Switching gear on Charge";
    }
}