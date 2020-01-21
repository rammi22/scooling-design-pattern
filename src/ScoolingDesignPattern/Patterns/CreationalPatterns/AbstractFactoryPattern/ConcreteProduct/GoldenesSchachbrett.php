<?php


namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Gold;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;

class GoldenesSchachbrett implements Spielbrett, Gold
{
    private $material;
    private $sizeX;
    private $sizeY;
    private $goldLegierung;

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

    public function setLegierung(int $legierung): void
    {
        $this->goldLegierung = $legierung;
    }
}