<?php

namespace Rentacar\Domain\Contracts\Repositories;

use Rentacar\Domain\Entities\Customer;

interface CustomerRepositoryInterface
{
    public function findCustomerById(int $id): Customer;
    public function saveOrUpdateCustomer(Customer $customer): void;
    public function findAllCustomers(): array;

    public function findCustomerByNameAndPhone(string $name, string $phone): ?Customer;
}