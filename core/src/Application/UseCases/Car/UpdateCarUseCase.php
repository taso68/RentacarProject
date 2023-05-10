<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Rentacar\Application\Contracts\UseCases\Car\UpdateCarUseCaseInterface;
use Rentacar\Application\DTOs\Input\UpdateCarDto;
use Rentacar\Application\DTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;

class UpdateCarUseCase implements UpdateCarUseCaseInterface {
    public function __construct(
        private CarRepositoryInterface $carRepository
    )
    {}

    public function execute(UpdateCarDto $updateCarDto): CarDTO
    {
        dd($updateCarDto);
    }
}