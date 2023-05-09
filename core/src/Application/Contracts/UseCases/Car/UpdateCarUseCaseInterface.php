<?php

namespace Rentacar\Application\Contracts\UseCases\Car;

use Rentacar\Application\DTOs\Input\UpdateCarDto;
use Rentacar\Application\DTOs\Output\CarDTO;

interface UpdateCarUseCaseInterface
{
    public function execute(UpdateCarDto $updateCarDto): CarDTO;
}