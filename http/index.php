<?php
declare(strict_types=1);

const CONFIG_DIR = __DIR__ . '/../backend/config';

require CONFIG_DIR . '/bootstrap.php';
$route = require CONFIG_DIR . '/route.php';

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;

    case FastRoute\Dispatcher::FOUND:
        [$controller, $parameters] = $route[1];

        $injector = require CONFIG_DIR . '/di.php';
        $object = $injector->make($controller);
        $injector->execute([$object, $parameters]);
        break;
}