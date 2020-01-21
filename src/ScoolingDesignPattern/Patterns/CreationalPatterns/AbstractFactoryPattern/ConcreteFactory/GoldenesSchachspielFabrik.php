<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteFactory;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractFactory\Interfaces\SpieleFabrik;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct\GoldenesSchachbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteProduct\GoldeneSchachspielfigur;

class GoldenesSchachspielFabrik implements SpieleFabrik
{
    private static $name = 'Gold Chess Factory AG';
    private static $typeGame = 'Schachspiel';

    public function createSpielbrett(): Spielbrett
    {
        return new GoldenesSchachbrett();
    }

    public function createSpielfigur(): Spielfigur
    {
        return new GoldeneSchachspielfigur();
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