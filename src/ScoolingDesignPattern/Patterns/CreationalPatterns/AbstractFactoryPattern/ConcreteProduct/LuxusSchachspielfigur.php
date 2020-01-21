<?php


namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;

class LuxusSchachspielfigur implements Spielfigur
{
    private $material;
    private $sizeH;
    private $sizeW;

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
}