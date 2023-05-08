<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Rentacar\Application\Contracts\UseCases\Car\GetCarUseCaseInterface;
use Rentacar\Application\DTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;

class GetCarUseCase implements GetCarUseCaseInterface
{
    public function __construct(
        private CarRepositoryInterface $carRepository
    )
    {}

    public function execute(float $id): CarDTO
    {
       return CarDTO::fromEntity($this->carRepository->getCarById($id));
    }
}