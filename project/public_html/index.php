<?php

require_once __DIR__.'/../vendor/autoload.php';

use KCS\Controller\VisitorController;
use KCS\SakykLabas;
use KCS\DbConnect as DB;
use KCS\Config;
use KCS\DotEnv;

try {
    $container = new DI\Container();

//    if (isset($_SERVER['APP_ENV'])) {
//        (new DotEnv(__DIR__.'/../.env'))->load();
//    }

//    echo "<meta charset='utf-8'>";
//    SakykLabas::vardas('Vardenis');

    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//
//    $config = new Config();

    /** @var DB $db */
    $controller = $container->get(VisitorController::class);
    $controller->index();

//    DB::tikrintiPrisijungima($config->dbHost, $config->dbUser, $config->dbPass, $config->dbName);

//    if (!empty($_REQUEST)) {
//        echo '<hr>Gauti užklausos duomenys:<br><br>';
//        var_dump($_REQUEST);
//    }
} catch (\Exception $exception) {
    echo "Oi nutiko klaida: " . $exception->getMessage();
    $log->warning($exception->getMessage());
}
