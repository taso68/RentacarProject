<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\CustomerDTOs\Output;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Domain\Entities\Customer;

class CustomerDTO extends BaseDTO
{
    public int $id;
    public string $name;
    public string $phone;


    public static function fromEntity(Customer $customer): self
    {
        return new self([
            'id' => $customer->getId(),
            'name' => $customer->getName(),
            'phone' => $customer->getPhone()
        ]);
    }

    public static function fromEntityArray(array $customers): ArrayCollection
    {
        $collection = new ArrayCollection();
        if(!empty($customers)) {
            foreach ($customers as $customer) {
                $collection->add(self::fromEntity($customer));
            }
        }
        return $collection;
    }
}