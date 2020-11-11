<?php
//coment
include_once 'config.php';
spl_autoload_register(function ($className) {
    $classFilePath = 'vendor' . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
        return true;
    }
    return false;
});
Router::init();