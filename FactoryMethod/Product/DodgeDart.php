<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarProduct
{
    public function speed()
    {
        echo "Speed up Dart\n";
    }
    public function brake()
    {
        echo "Brake Dogde Dart\n";
    }
    public function switchGear()
    {
        echo "Switching gear on Charge Dart\n";
    }
}