<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Rentacar\Application\Contracts\UseCases\Car\CreateCarUseCaseInterface;
use Rentacar\Application\DTOs\CarDTOs\Input\CreateCarDTO;
use Rentacar\Application\DTOs\CarDTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;
use Rentacar\Domain\Entities\Car;

class CreateCarUseCase implements CreateCarUseCaseInterface
{
    public function __construct(
        private CarRepositoryInterface $carRepository
    ) {}

    public function execute(CreateCarDTO $carDTO): CarDTO
    {
        $car = new Car();
        $car->setLicencePlate($carDTO->licencePlate);
        $car->setYear($carDTO->year);
        $car->setMark($carDTO->mark);
        $car->setModel($carDTO->model);
        $car->setRegisterDate($carDTO->registerDate);
        $this->carRepository->createOrUpdateCar($car);

        return CarDTO::fromEntity($car);
    }
}