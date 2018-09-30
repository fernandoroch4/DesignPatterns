<?php
namespace DesignPatterns\Decorator;

abstract class Character
{
    protected $name;
    protected $attack;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): float
    {
        return $this->attack;
    }
}