<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Customer;

use Rentacar\Application\Contracts\UseCases\Customer\CreateCustomerUseCaseInterface;
use Rentacar\Application\DTOs\CustomerDTOs\Input\CreateCustomerDTO;
use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;
use Rentacar\Domain\Contracts\Repositories\CustomerRepositoryInterface;
use Rentacar\Domain\Entities\Customer;

class CreateCustomerUseCase implements CreateCustomerUseCaseInterface
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    )
    {}
    public function execute(CreateCustomerDTO $createCustomerDTO): CustomerDTO
    {
        $customer = new Customer();
        $customer->setName($createCustomerDTO->name);
        $customer->setPhone($createCustomerDTO->phone);

        $this->customerRepository->saveOrUpdateCustomer($customer);

        return CustomerDTO::fromEntity($customer);
    }
}