<?php

namespace ScoolingDesignPattern\Controllers;

class HomeController extends AbstractController
{
    public function __construct() {
        return $this->renderTemplate('homepage', [
            'template' => 'home',
            'metaTags' => [
                'title' => 'PHP-Training:Design Pattern',
                'robots' => 'all',
                'description' => 'Entwurfmuster (Design Pattern) der Softwareentwicklung erklärt mit Beispielen in PHP',
            ]
        ]);
    }
}