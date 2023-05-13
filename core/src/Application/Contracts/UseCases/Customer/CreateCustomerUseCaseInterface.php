<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Customer;

use Rentacar\Application\DTOs\CustomerDTOs\Input\CreateCustomerDTO;
use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;

interface CreateCustomerUseCaseInterface
{
    public function execute(CreateCustomerDTO $createCustomerDTO): CustomerDTO;
}