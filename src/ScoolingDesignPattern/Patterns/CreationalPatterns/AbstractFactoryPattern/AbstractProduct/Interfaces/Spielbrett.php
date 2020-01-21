<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces;

/**
 * Interface Spielbrett
 * @package ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces
 */
interface Spielbrett
{
    /**
     * welches Material soll verwendet werden
     *
     * @param string $material
     * @return string
     */
    public function setMaterial(string $material): void;

    /**
     * Länge Spielbrett X-Koordinate in mm
     *
     * @param int $size
     * @return int
     */
    public function setSizeX(int $size): void;

    /**
     * Breite Spielbrett Y-Koordinate in mm
     *
     * @param int $size
     * @return int
     */
    public function setSizeY(int $size): void;
}