<?php
namespace DesignPatterns\Builder;

abstract class RocketBuilder
{
    protected $rocket;

    public function __construct()
    {
        $this->rocket = new RocketProduct;
    }

    public function getRocket(): RocketProduct
    {
        return $this->rocket;
    }

    abstract public function buildModel();
    abstract public function buildFuelTank();
    abstract public function buildNumberOfEngines();
    abstract public function buildNumberOfSeats();
}