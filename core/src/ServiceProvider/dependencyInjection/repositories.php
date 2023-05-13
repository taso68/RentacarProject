<?php

declare(strict_types=1);

use Rentacar\Domain\Contracts;
use Rentacar\Infrastructure\DataAccess;

return [
    Contracts\Repositories\CarRepositoryInterface::class => DataAccess\Repositories\CarRepository::class,
    Contracts\Repositories\CustomerRepositoryInterface::class => DataAccess\Repositories\CustomerRepository::class
];
