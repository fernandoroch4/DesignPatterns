<?php
namespace DesignPatterns\Decorator;

class MedievalKnight extends Character
{
    public function __construct()
    {
        $this->name = 'Medieval Knight';
        $this->attack = 35;
    }
}