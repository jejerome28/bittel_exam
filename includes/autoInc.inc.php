<?php

spl_autoload_register(function($className){
    $filePath = 'classes/' . $className . '.class.php';

    if(!file_exists($filePath)){
        return false;
    }

    include_once $filePath;
});