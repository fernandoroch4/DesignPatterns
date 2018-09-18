<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarProduct
{
    public function speed()
    {
        echo "Speed up Dart";
    }
    public function brake()
    {
        echo "Brake Dogde Dart";
    }
    public function switchGear()
    {
        echo "Switching gear on Charge Dart";
    }
}