<?php

namespace Rentacar\Application\Contracts\UseCases\Car;

use Rentacar\Application\DTOs\Output\CarDTO;

interface GetCarUseCaseInterface
{
    public function execute(float $id): CarDTO;
}