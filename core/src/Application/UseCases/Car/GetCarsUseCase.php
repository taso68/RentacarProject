<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\Contracts\UseCases\Car\GetCarsUseCaseInterface;
use Rentacar\Application\DTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;

class GetCarsUseCase implements GetCarsUseCaseInterface
{
    public function __construct(
        private CarRepositoryInterface $carRepository
    )
    {}

    public function execute(): ArrayCollection
    {
        return CarDTO::fromEntityArray($this->carRepository->getAllCars());
    }
}