<?php
namespace DesignPatterns\Decorator;

class FireRing extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 4;
    }
}