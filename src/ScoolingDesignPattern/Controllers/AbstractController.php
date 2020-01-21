<?php


namespace ScoolingDesignPattern\Controllers;


class AbstractController
{
    protected function renderTemplate(?string $template, $templateVariables = []): void
    {
        $template = __DIR__ . '/../Views/' . $template . '.tpl.php';
        require_once __DIR__ . '/../Views/layout.tpl.php';
        exit();
    }
}