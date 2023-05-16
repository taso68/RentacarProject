<?php

declare(strict_types=1);

use Rentacar\Application\Contracts;
use Rentacar\Application;

return [
    Contracts\UseCases\Car\GetCarsUseCaseInterface::class => Application\UseCases\Car\GetCarsUseCase::class,
    Contracts\UseCases\Car\GetCarUseCaseInterface::class => Application\UseCases\Car\GetCarUseCase::class,
    Contracts\UseCases\Car\CreateCarUseCaseInterface::class => Application\UseCases\Car\CreateCarUseCase::class,
    Contracts\UseCases\Car\UpdateCarUseCaseInterface::class => Application\UseCases\Car\UpdateCarUseCase::class,

    Contracts\UseCases\Users\GetUserUseCaseInterface::class => Application\UseCases\Users\GetUserUseCase::class,
    Contracts\UseCases\Users\CreateUserUseCaseInterface::class => Application\UseCases\Users\CreateUserUseCase::class,
];
