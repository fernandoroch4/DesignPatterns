<?php
namespace DesignPatterns\FactoryMethod\Product;

class DodgeCharger implements CarProduct
{
    public function speed()
    {
        echo "Speed up Dogde Charger\n";
    }
    public function brake()
    {
        echo "Brake Charger\n";
    }
    public function switchGear()
    {
        echo "Switching gear on Charge\n";
    }
}