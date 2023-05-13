<?php

namespace Rentacar\Infrastructure\DataAccess\Repositories;


use Rentacar\Domain\Contracts\Repositories\CustomerRepositoryInterface;
use Rentacar\Domain\Entities\Customer;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{

    public function saveOrUpdateCustomer(Customer $customer): void
    {
        $this->createOrUpdate($customer);
    }
}