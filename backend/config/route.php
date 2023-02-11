<?php
declare(strict_types=1);

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $rc) {
    require __DIR__ . '/../src/Module/Auth/config/route.php';
});

return $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);