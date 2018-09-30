<?php
namespace DesignPatterns\Decorator;

class Archer extends Character
{
    public function __construct()
    {
        $this->name = 'Archer';
        $this->attack = 27;
    }
}