<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteFactory;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractFactory\Interfaces\SpieleFabrik;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct\LuxusSchachbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct\LuxusSchachspielfigur;

class LuxusSchachspielFabrik implements SpieleFabrik
{
    private static $name = 'Luxury Chess Factory Ltd';
    private static $typeGame = 'Schachspiel';

    public function createSpielbrett(): Spielbrett
    {
        return new LuxusSchachbrett();
    }

    public function createSpielfigur(): Spielfigur
    {
        return new LuxusSchachspielfigur();
    }

    public function getFactoryName(): string
    {
        return self::$name;
    }

    public function getTypeGame(): string
    {
        return self::$typeGame;
    }
}