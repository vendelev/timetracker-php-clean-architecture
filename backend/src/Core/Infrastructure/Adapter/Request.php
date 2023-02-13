<?php
declare(strict_types=1);

namespace App\Core\Infrastructure\Adapter;

use App\Module\Auth\Domain\Infrastructure\RequestInterface;

class Request implements RequestInterface
{
    public function __construct(
       private readonly \Http\Request $request
    ) {}

    public function getParameter($key, $defaultValue = null)
    {
        return $this->request->getParameter($key, $defaultValue);
    }

    public function getMethod()
    {
        return $this->request->getMethod();
    }
}