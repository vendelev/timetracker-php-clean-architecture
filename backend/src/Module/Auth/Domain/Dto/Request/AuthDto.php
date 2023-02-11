<?php
declare(strict_types=1);

namespace App\Module\Auth\Domain\Dto\Request;

class AuthDto
{
    public function __construct(
        public readonly string $login,
        public readonly string $password,
    ) {}
}