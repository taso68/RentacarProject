<?php

namespace Rentacar\Infrastructure\DataAccess\Repositories;


use Rentacar\Domain\Contracts\Repositories\CustomerRepositoryInterface;
use Rentacar\Domain\Entities\Customer;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    protected string $entity = Customer::class;

    /**
     * @throws EntityNotFoundException
     */
    public function findCustomerById(int $id): Customer
    {
        return $this->findById($id);
    }
    public function findAllCustomers(): array
    {
        return  $this->findAll();
    }
    public function findCustomerByNameAndPhone(string $name, string $phone): ?Customer
    {
        return $this->em->getRepository(Customer::class)->findOneBy(['name' => $name, 'phone' => $phone]);
    }
    public function saveOrUpdateCustomer(Customer $customer): void
    {
        $this->createOrUpdate($customer);
    }
}