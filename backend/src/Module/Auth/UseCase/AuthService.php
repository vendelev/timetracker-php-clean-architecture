<?php
declare(strict_types=1);

namespace App\Module\Auth\UseCase;

use App\Framework\Domain\Interfaces\SessionInterface;
use App\Module\Auth\Domain\Dto\Request\AuthDto;
use App\Module\Auth\Domain\Entity\Employee;

class AuthService
{
    public function __construct(
        private readonly SessionInterface $session
    ) {}

    public function checkPassword(AuthDto $dto, Employee $entity): bool
    {
        return ($dto->password && password_verify($dto->login . $dto->password, $entity->password));
    }

    public function auth(Employee $entity): void
    {
        $this->session->start();

        $_SESSION['employee'] = $entity;
    }
}