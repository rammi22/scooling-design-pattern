<?php

namespace ScoolingDesignPattern;

class App
{
    public function run()
    {
        $controller = 'ScoolingDesignPattern\\Controllers\\' . $this->getControllerNameByUrl();
        return new $controller();
    }

    private function getControllerNameByUrl() {
        require_once __DIR__ . '/../../routes/webroutes.php';
        $urlPartController = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if(!isset($routeList[$urlPartController]['controller'])) {
            echo 'Fehler 404 | Seite existiert nicht';
            exit();
        }
        return $routeList[$urlPartController]['controller'];
    }
}