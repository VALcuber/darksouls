<?php

    define("ROOT", dirname(__FILE__));
    define("PATH_C", ROOT. "/Controllers/");
    define("PATH_M", ROOT. "/Models/");
    define("PATH_V", ROOT. "/Views/");

    include ("conf/db.php");
    include ("conf/router.php");

    include PATH_C. 'Controller.php'; // Подключаем контроллер
    include PATH_M. 'Model.php';
    include PATH_V. 'View.php';

    Routing::buildRoute();