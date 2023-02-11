<?php
declare(strict_types=1);

namespace App\Module\Auth\Domain\Infrastructure;

use App\Module\Auth\Domain\Entity\Employee;

interface EmployeeRepositoryInterface
{
    public function get(string $login): ?Employee;
}