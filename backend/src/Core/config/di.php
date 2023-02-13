<?php
declare(strict_types=1);

use App\Core\Domain\Interfaces\DbConnectionInterface;
use App\Core\Domain\Interfaces\SessionInterface;
use App\Core\Infrastructure\FileSession;
use App\Core\Infrastructure\SQLiteConnection;

/** @var Auryn\Injector $injector */
$injector->define(SQLite3::class, [__DIR__ . '/../../../../SQLiteDB/tasktracker.db']);
$injector->alias(DbConnectionInterface::class, SQLiteConnection::class);
$injector->alias(SessionInterface::class, FileSession::class);
