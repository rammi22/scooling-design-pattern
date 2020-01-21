<?php


namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Gold;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;

class GoldeneSchachspielfigur implements Spielfigur, Gold
{

    private $material;
    private $sizeH;
    private $sizeW;
    private $legierung;

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setSizeH(int $size): void
    {
        $this->sizeH = $size;
    }

    public function getSizeH(): ?string
    {
        return $this->sizeH;
    }

    public function setSizeW(int $size): void
    {
        $this->sizeW = $size;
    }

    public function getSizeW(): ?string
    {
        return $this->sizeW;
    }

    public function setLegierung(int $legierung): void
    {
        $this->legierung = $legierung;
    }
}