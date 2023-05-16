<?php

namespace Rentacar\Domain\Contracts\Repositories;

use Rentacar\Domain\Entities\Car;

interface CarRepositoryInterface
{
    public function getCarById(int $id): Car;
    public function getAllCars(): array;
    public function createOrUpdateCar(Car $car): void;
    public function deleteCar(Car $car): void;

}