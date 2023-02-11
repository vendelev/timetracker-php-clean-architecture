<?php
declare(strict_types=1);

namespace App\Module\Auth\Domain\Infrastructure;

interface SessionStartInterface
{
    public function start(): void;
}