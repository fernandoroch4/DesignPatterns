<?php
namespace DesignPatterns\Decorator;

class Mage extends Character
{
    public function __construct()
    {
        $this->name = 'Mage';
        $this->attack = 29;
    }
}