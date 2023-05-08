<?php

spl_autoload_register('classLoader');
function classLoader($className){
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'includes') == true) {
        $path = "../classes/";
    }
    else{
        $path = "classes/";
    }
    $extension = ".class.php" ;

    include $path . $className . $extension;
}