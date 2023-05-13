<?php

namespace Rentacar\Application\Contracts\UseCases\Car;

use Rentacar\Application\DTOs\CarDTOs\Input\UpdateCarDto;
use Rentacar\Application\DTOs\CarDTOs\Output\CarDTO;

interface UpdateCarUseCaseInterface
{
    public function execute(UpdateCarDto $updateCarDto): CarDTO;
}