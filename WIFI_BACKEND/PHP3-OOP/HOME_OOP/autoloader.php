<?php

// Bei OOP kann es durchaus vorkommen, dass es ganz viele Klassen gibt. 
// Um nicht ständig jedesmal die Klassen "includen" zu müssen, kann ein sog. Autoloader verwendet werden.
// Dieser Autoloader lädt alle Klassen automatisch, und zwar nur dann, wann sie auch tatsächlich verwendet werden.


spl_autoload_register('myAutoLoader');

function myAutoLoader() {
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
}


?>