<?php
declare(strict_types=1);

use Http\HttpRequest;
use Http\Request;

$injector = new Auryn\Injector;

$injector->delegate(Request::class, function() {
    return new HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER, file_get_contents('php://input'));
});

require __DIR__ . '/../src/Core/config/di.php';
require __DIR__ . '/../src/Module/Auth/config/di.php';

return $injector;