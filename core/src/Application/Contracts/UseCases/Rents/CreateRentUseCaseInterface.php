<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Rents;

use Rentacar\Application\DTOs\RentDTOs\Input\CreateRentDTO;

interface CreateRentUseCaseInterface
{
    public function execute(CreateRentDTO $createRentDTO);

}