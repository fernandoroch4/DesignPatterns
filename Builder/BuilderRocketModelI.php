<?php
namespace DesignPatterns\Builder;

class BuilderRocketModelI extends RocketBuilder
{
    public function buildModel()
    {
        $this->rocket->setModel('Rocket I');
    }
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(1590.90);
    }
    public function buildNumberOfEngines()
    {
        $this->rocket->setNumberOfEngines(2);
    }
    public function buildNumberOfSeats()
    {
        $this->rocket->setNumberOfSeats(4);
    }
}

