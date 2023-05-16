<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Customer;

use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;

interface GetCustomerByIdUseCaseInterface
{
    public function execute(int $id): CustomerDTO;
}