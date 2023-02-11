<?php
declare(strict_types=1);

namespace App\Framework\Domain\Interfaces;

interface SessionInterface
{
    public function checkSession(): bool;

    public function start(): void;
}