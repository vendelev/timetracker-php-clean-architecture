<?php
declare(strict_types=1);

use App\Framework\Domain\Interfaces\DbConnectionInterface;
use App\Framework\Domain\Interfaces\SessionInterface;
use App\Framework\Infrastructure\FileSession;
use App\Framework\Infrastructure\SQLiteConnection;

/** @var Auryn\Injector $injector */
$injector->define(SQLite3::class, [__DIR__ . '/../../../../SQLiteDB/tasktracker.db']);
$injector->alias(DbConnectionInterface::class, SQLiteConnection::class);
$injector->alias(SessionInterface::class, FileSession::class);
