<?php
declare(strict_types=1);

namespace App\Framework\Infrastructure;

use App\Framework\Domain\Interfaces\SessionInterface;

class FileSession implements SessionInterface
{
    public function checkSession(): bool
    {
        return (bool)session_id();
    }

    public function start(): void
    {
        if (session_id()) {
            session_destroy();
        }

        session_start();
    }
}