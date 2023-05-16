<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Customer;

use Rentacar\Application\Contracts\UseCases\Customer\GetCustomerByIdUseCaseInterface;
use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;
use Rentacar\Domain\Contracts\Repositories\CustomerRepositoryInterface;

class GetCustomerByIdUseCase implements GetCustomerByIdUseCaseInterface
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    )
    {}

    public function execute(int $id): CustomerDTO
    {
        return CustomerDTO::fromEntity($this->customerRepository->findCustomerById($id));
    }
}