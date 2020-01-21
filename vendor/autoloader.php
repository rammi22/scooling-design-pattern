<?php
spl_autoload_register(function ($className) {
    $sourceFolder = '/../src/';
    $cleanClassName = str_replace('\\', '/', $className);
    $path = __DIR__ . $sourceFolder . $cleanClassName . '.php';

    if(!file_exists($path)) {
        var_dump($path);
        echo 'Fehler 500 | Serverfehler';
        die();
    };
    include_once $path;
});