<?php

class Bootstrap
{

    public static function run()
    {
        $error = new View();
        $errorStatus = new ErrorStatus();

        $controller = 'Index';

        $action = 'main';

        $url = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($url[1])) {

            $controller = ucfirst($url[1]);

        }


        if (!empty($url[2])) {

            $action = $url[2];

        }

        if (file_exists('app/controllers/' . $controller . '.php')) {

            require_once 'app/controllers/' . $controller . '.php';

        } else {

            header($errorStatus->getError404());

            $error->render('error/404', 'layout');

            exit();

        }

        $object = new $controller;

        if (method_exists($controller, $action)) {

            $object->$action();

        } else {

            header($errorStatus->getError404());

            $error->render('error/404', 'layout');

        }
    }
}