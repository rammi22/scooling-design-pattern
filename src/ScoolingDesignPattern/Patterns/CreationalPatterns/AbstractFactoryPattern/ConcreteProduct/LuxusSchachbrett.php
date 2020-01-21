<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;

class LuxusSchachbrett implements Spielbrett
{
    private $material;
    private $sizeX;
    private $sizeY;

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setSizeX(int $size): void
    {
        $this->sizeX = $size;
    }

    public function getSizeX(): int {
        return $this->sizeX;
    }

    public function setSizeY(int $size): void
    {
        $this->sizeY = $size;
    }

    public function getSizeY(): int {
        return $this->sizeY;
    }
}