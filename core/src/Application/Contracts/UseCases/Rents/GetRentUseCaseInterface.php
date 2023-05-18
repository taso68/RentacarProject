<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Rents;

use Rentacar\Application\DTOs\RentDTOs\Output\RentDTO;

interface GetRentUseCaseInterface
{
    public function execute(int $id): RentDTO;
}