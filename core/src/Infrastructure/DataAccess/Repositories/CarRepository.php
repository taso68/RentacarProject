<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;
use Rentacar\Domain\Entities\Car;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

class CarRepository extends BaseRepository implements CarRepositoryInterface
{
    protected string $entity = Car::class;

    /**
     * @throws EntityNotFoundException
     */
    public function getCarById(float $id): Car
    {
        return $this->findById($id);
    }

    /**
     * @throws EntityNotFoundException
     */
    public function getAllCars(): array
    {
        return $this->findAll();
    }
    public function createOrUpdateCar(Car $car): void
    {
        $this->createOrUpdate($car);
    }
    public function deleteCar(Car $car): void
    {
        $this->delete($car);
    }
}