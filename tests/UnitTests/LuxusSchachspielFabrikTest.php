<?php


use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteFactory\LuxusSchachspielFabrik;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielbrett;
use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces\Spielfigur;
use PHPUnit\Framework\TestCase;

class LuxusSchachspielFabrikTest extends TestCase
{
    private $factory;
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->factory = new LuxusSchachspielFabrik();
    }

    public function testCreateSpielbrett()
    {
        $this->assertInstanceOf(Spielbrett::class, $this->factory->createSpielbrett());
    }

    public function testCreateSpielfigur()
    {
        $this->assertInstanceOf(Spielfigur::class, $this->factory->createSpielfigur());
    }
}
