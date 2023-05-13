<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Rentacar\Application\Contracts\UseCases\Car\UpdateCarUseCaseInterface;
use Rentacar\Application\DTOs\CarDTOs\Input\UpdateCarDto;
use Rentacar\Application\DTOs\CarDTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;

class UpdateCarUseCase implements UpdateCarUseCaseInterface {
    public function __construct(
        private CarRepositoryInterface $carRepository
    )
    {}

    public function execute(UpdateCarDto $updateCarDto): CarDTO
    {
        $car = $this->carRepository->getCarById($updateCarDto->id);

        if($updateCarDto->licencePlate) $car->setLicencePlate($updateCarDto->licencePlate);
        if($updateCarDto->mark) $car->setMark($updateCarDto->mark);
        if($updateCarDto->model) $car->setModel($updateCarDto->model);
        if($updateCarDto->year) $car->setYear($updateCarDto->year);
        if($updateCarDto->registerDate) $car->setRegisterDate($updateCarDto->registerDate);

        $this->carRepository->createOrUpdateCar($car);

        return CarDTO::fromEntity($car);
    }
}