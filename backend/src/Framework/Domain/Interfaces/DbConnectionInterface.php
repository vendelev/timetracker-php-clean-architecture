<?php
declare(strict_types=1);

namespace App\Framework\Domain\Interfaces;

interface DbConnectionInterface
{
    public function fetchAll(string $sql, array $params = []): array;
}