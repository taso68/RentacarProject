<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Customer;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\Contracts\UseCases\Customer\GetCustomersUseCaseInterface;
use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;
use Rentacar\Domain\Contracts\Repositories\CustomerRepositoryInterface;

class GetCustomersUseCase implements GetCustomersUseCaseInterface
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    )
    {}

    public function execute(): ArrayCollection
    {
        return CustomerDTO::fromEntityArray($this->customerRepository->findAllCustomers());
    }

}