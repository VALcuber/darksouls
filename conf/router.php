<?php


    class Routing
    {

        public static function buildRoute()
        {

            /*Контроллер и action по умолчанию*/
            $controllerName = "IndexController";
            $modelName = "IndexModel";
            $action = "index";

            $route = explode("/", $_SERVER['REQUEST_URI']);

            if (isset($route[1])) {
                $route1 = strtok($route[1], '-');
                $env['route1'] = $route1;
            }

            if (isset($route[2])) {
                $route2 = strtok($route[2], '-');
                $env['route2'] = $route2;
            }

            include PATH_C . $controllerName . ".php"; //IndexController.php
            include PATH_M . $modelName . ".php"; //IndexModel.php

            $controller = new $controllerName();
            $controller->$action();
        }
    }