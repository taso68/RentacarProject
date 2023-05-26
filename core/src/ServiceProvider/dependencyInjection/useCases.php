<?php

declare(strict_types=1);

use Rentacar\Application;
use Rentacar\Application\Contracts;

return [
    /* Auth */
    Contracts\UseCases\Auth\RegisterUserUseCaseInterface::class => Application\UseCases\Auth\RegisterUserUseCase::class,

    /* Cars */
    Contracts\UseCases\Car\GetCarsUseCaseInterface::class => Application\UseCases\Car\GetCarsUseCase::class,
    Contracts\UseCases\Car\GetCarUseCaseInterface::class => Application\UseCases\Car\GetCarUseCase::class,
    Contracts\UseCases\Car\CreateCarUseCaseInterface::class => Application\UseCases\Car\CreateCarUseCase::class,
    Contracts\UseCases\Car\UpdateCarUseCaseInterface::class => Application\UseCases\Car\UpdateCarUseCase::class,

    /* Users */
    Contracts\UseCases\Users\GetUserUseCaseInterface::class => Application\UseCases\Users\GetUserUseCase::class,
    Contracts\UseCases\Users\UpdateUserUseCaseInterface::class => Application\UseCases\Users\UpdateUserUseCase::class,

    /* Rents */
    Contracts\UseCases\Rents\CreateRentUseCaseInterface::class => Application\UseCases\Rents\CreateRentUseCase::class,
    Contracts\UseCases\Rents\GetRentUseCaseInterface::class => Application\UseCases\Rents\GetRentUseCase::class,
];
