<?php

declare(strict_types=1);

use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;
use Rentacar\Infrastructure\DataAccess\Repositories\CarRepository;

return [
    CarRepositoryInterface::class => CarRepository::class,
];
