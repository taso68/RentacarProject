<?php

namespace Rentacar\Domain\Contracts\Repositories;

use Rentacar\Domain\Entities\Customer;

interface CustomerRepositoryInterface
{
    public function saveOrUpdateCustomer(Customer $customer): void;
}