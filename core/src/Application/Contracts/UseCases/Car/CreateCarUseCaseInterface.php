<?php

namespace Rentacar\Application\Contracts\UseCases\Car;

use Rentacar\Application\DTOs\Input\CreateCarDTO;
use Rentacar\Application\DTOs\Output\CarDTO;

interface CreateCarUseCaseInterface
{
    public function execute(CreateCarDTO $carDTO): CarDTO
    ;
}