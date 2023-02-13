<?php
declare(strict_types=1);

namespace App\Core\Domain\Interfaces;

interface DbConnectionInterface
{
    public function fetchAll(string $sql, array $params = []): array;
}