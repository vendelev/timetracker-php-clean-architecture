<?php
declare(strict_types=1);

namespace App\Module\Auth\Domain\Entity;

class Employee
{
    public function __construct(
        public readonly int $id,
        public readonly string $login,
        public readonly string $password,
    ) {}
}