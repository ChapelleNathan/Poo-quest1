<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 100;
    private bool $isEngineOn = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        if ($this->isEngineOn) {
            $this->currentSpeed = 50;
            return 'Go';
        } else {
            return 'Engine need to be on';
        }
    }

    public function break(): string
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
        }
        return  'im stopped';
    }

    public function start(): string
    {
        if ($this->isEngineOn) {
            return 'Engine is already On';
        } else {
            $this->isEngineOn = true;
            return 'Engine start';
        }
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats): void
    {
        $this->nbSeat = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getIsEngineOn(): bool
    {
        return $this->isEngineOn;
    }

    public function setIsEngineOn($isEngineOn): void
    {
        $this->isEngineOn = $isEngineOn;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
}
