<?php
declare(strict_types=1);

namespace App\Module\Auth\Infrastructure\Adapter;

use App\Framework\Domain\Interfaces\SessionInterface;
use App\Module\Auth\Domain\Infrastructure\SessionStartInterface;

class SessionStartAdapter implements SessionStartInterface
{
    public function __construct(
        private readonly SessionInterface $session
    ) {}

    public function start(): void
    {
        $this->session->start();
    }
}