<?php
declare(strict_types=1);

namespace App\Module\Auth\EntryPoint\Web\Controller;

use App\Module\Auth\Domain\Dto\Request\AuthDto;
use App\Module\Auth\Domain\Infrastructure\EmployeeRepositoryInterface;
use App\Module\Auth\Domain\Infrastructure\RequestInterface;
use App\Module\Auth\UseCase\AuthService;

class AuthController
{
    public function __construct(
        private readonly RequestInterface $request,
        private readonly EmployeeRepositoryInterface $repository,
        private readonly AuthService $service,
    ) {}

    public function login(): void
    {
        if ($this->request->getMethod() === RequestInterface::METHOD_POST) {
            $authDto = new AuthDto(
                $this->request->getParameter('login', ''),
                $this->request->getParameter('password', ''),
            );

            $employee = $this->repository->get($authDto->login);
            if ($employee && $this->service->checkPassword($authDto, $employee)) {
                $this->service->auth($employee);

                header('Location: /task/list',true,301);
                exit;
            }

            header('Location: ',true,301);
            exit;
        }

        require __DIR__ . '/../Template/login.php';
    }
}