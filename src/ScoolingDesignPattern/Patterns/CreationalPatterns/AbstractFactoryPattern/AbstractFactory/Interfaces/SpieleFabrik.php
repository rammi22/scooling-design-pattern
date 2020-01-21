<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractFactory\Interfaces;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;

/**
 * Interface SpieleFabrik
 * @package ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractFactory\Interface
 */
interface SpieleFabrik
{
    public function createSpielbrett(): Spielbrett;
    public function createSpielfigur(): Spielfigur;
}