<?php
declare(strict_types=1);

use App\Module\Auth\EntryPoint\Web\Controller\AuthController;
use FastRoute\RouteCollector;

/** @var RouteCollector $rc */
$rc->addRoute(['GET', 'POST'], '/auth/login', [AuthController::class, 'login']);