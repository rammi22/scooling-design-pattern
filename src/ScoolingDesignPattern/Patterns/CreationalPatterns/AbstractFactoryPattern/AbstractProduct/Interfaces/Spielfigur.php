<?php

namespace ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces;

/**
 * Interface Spielfigur
 * @package ScoolingDesignPattern\Patterns\CreationalPatterns\AbstractFactoryPattern\AbstractProduct\Interfaces
 */
interface Spielfigur
{
    /**
     * Material der Spielfigur
     *
     * @param string $material
     * @return void
     */
    public function setMaterial(string $material): void;

    /**
     * Höhe der Spielfigur
     *
     * @param int $size
     * @return int
     */
    public function setSizeH(int $size): void;

    /**
     * Breite (oder Durchmesser) der Spielfigur
     *
     * @param int $size
     * @return int
     */
    public function setSizeW(int $size): void;
}