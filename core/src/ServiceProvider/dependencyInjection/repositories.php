<?php

declare(strict_types=1);

use Rentacar\Domain\Contracts;
use Rentacar\Infrastructure\DataAccess;

return [
    Contracts\Repositories\CarRepositoryInterface::class => DataAccess\Repositories\CarRepository::class,
    Contracts\Repositories\UserRepositoryInterface::class => DataAccess\Repositories\UserRepository::class,
    Contracts\Repositories\RentRepositoryInterface::class => DataAccess\Repositories\RentRepository::class
];
