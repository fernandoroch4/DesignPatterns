<?php
namespace DesignPatterns\Builder;

class RocketProduct
{
    protected $model;
    protected $fuelTank;
    protected $numberOfEngines;
    protected $numberOfSeats;

    // Let's use "echo" to print output
    public function __toString(): string
    {
        $result = "Rocket Model: {$this->getModel()}\n";
        $result .= "Fuel in Tank: {$this->getFuelTank()}\n";
        $result .= "Engines: {$this->getNumberOfEngines()}\n";
        $result .= "Seats: {$this->getNumberOfSeats()}\n";
        return $result;
    }

    public function getModel(): string
    {
        return $this->model;
    }
    public function getFuelTank(): float
    {
        return $this->fuelTank;
    }
    public function getNumberOfEngines(): int
    {
        return $this->numberOfEngines;
    }
    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    public function setModel(string $model): RocketProduct
    {
        $this->model = $model;
        return $this;
    }
    public function setFuelTank(float $fuelTank): RocketProduct
    {
        $this->fuelTank = $fuelTank;
        return $this;
    }
    public function setNumberOfEngines(int $numberOfEngines): RocketProduct
    {
        $this->numberOfEngines = $numberOfEngines;
        return $this;
    }
    public function setNumberOfSeats(int $numberOfSeats): RocketProduct
    {
        $this->numberOfSeats = $numberOfSeats;
        return $this;
    }
}