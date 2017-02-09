<?php

function classes_autoload($classname)
{
    $path = array(
        'libs' => 'app/core/',
        'models' => 'app/models/',
    );

    foreach (array_keys($path) as $folder) {

        if (file_exists($path[$folder] . $classname . '.php')) {

            require_once $path[$folder] . $classname . '.php';

            break;

        }

    }

}

spl_autoload_register('classes_autoload');