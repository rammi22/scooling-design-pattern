<?php

namespace ScoolingDesignPattern\Controllers;

use ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\ConcreteFactory\LuxusSchachspielFabrik;

class AbstractFactoryPatternController extends AbstractController
{
    public function __construct() {

        $fabrik = new LuxusSchachspielFabrik();
        $spielbrett = $fabrik->createSpielbrett();
        $spielbrett->setMaterial('Mahagoni');
        $spielbrett->setSizeX(500);
        $spielbrett->setSizeY(500);
        $spielfigur = $fabrik->createSpielfigur();
        $spielfigur->setMaterial('Elfenbein');
        $spielfigur->setSizeH(40);
        $spielfigur->setSizeW(30);

        return $this->renderTemplate(
            'abstract_factory_pattern',
            [
                'template' => 'abstract_factory_pattern',
                'fabrik' => $fabrik,
                'produktFamilie' => [
                    'spielbrett' => $spielbrett,
                    'spielfigur' => $spielfigur,
                ],
                'metaTags' => [
                    'robots' => 'all',
                    'title' => 'PHP-Training:AbstractFactory Entwurfmuster',
                    'description' => 'Design Pattern AbstractFactory erklärt mit PHP-Code und einem Beispiel',
                ]
            ]
        );
    }
}