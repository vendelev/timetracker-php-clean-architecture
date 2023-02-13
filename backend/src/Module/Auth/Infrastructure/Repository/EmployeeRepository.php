<?php
declare(strict_types=1);

namespace App\Module\Auth\Infrastructure\Repository;

use App\Core\Domain\Interfaces\DbConnectionInterface;
use App\Module\Auth\Domain\Entity\Employee;
use App\Module\Auth\Domain\Infrastructure\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function __construct(
        private readonly DbConnectionInterface $connection
    ) {}

    public function get(string $login): ?Employee
    {
        $result = $this->connection->fetchAll('select id, login, password from employee where login = :login limit 1', [':login' => $login]);

        if ($result) {
            $item = $result[0];
            return new Employee($item['id'], $item['login'], $item['password']);
        }

        return null;
    }
}