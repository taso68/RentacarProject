<?php

namespace Rentacar\Application\Contracts\UseCases\Car;

use Rentacar\Application\DTOs\CarDTOs\Input\CreateCarDTO;
use Rentacar\Application\DTOs\CarDTOs\Output\CarDTO;

interface CreateCarUseCaseInterface
{
    public function execute(CreateCarDTO $carDTO): CarDTO
    ;
}