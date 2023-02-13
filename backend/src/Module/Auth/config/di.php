<?php
declare(strict_types=1);

use App\Core\Infrastructure\Adapter\Request as RequestAdapter;
use App\Module\Auth\Domain\Infrastructure\EmployeeRepositoryInterface;
use App\Module\Auth\Domain\Infrastructure\RequestInterface;
use App\Module\Auth\Infrastructure\Repository\EmployeeRepository;

/** @var Auryn\Injector $injector */
$injector->alias(RequestInterface::class, RequestAdapter::class);
$injector->alias(EmployeeRepositoryInterface::class, EmployeeRepository::class);