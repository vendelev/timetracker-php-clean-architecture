<?php
declare(strict_types=1);

namespace App\Module\Auth\Domain\Infrastructure;

interface RequestInterface
{
    public const METHOD_POST = 'POST';

    public function getParameter($key, $defaultValue = null);
    public function getMethod();
}