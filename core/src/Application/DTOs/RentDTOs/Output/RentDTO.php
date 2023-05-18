<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\RentDTOs\Output;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Application\DTOs\CarDTOs\Output\CarDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Entities\Rent;

class RentDTO extends BaseDTO
{
    public int $id;
    public UserDTO $customer;
    public UserDTO $worker;

    public CarDTO $car;
    public DateTime $starts;
    public DateTime $ends;

    public static function fromEntity(Rent $rent): self
    {
        return new self([
            'id' => $rent->getId(),
            'customer' => UserDTO::fromEntity($rent->getCustomer()),
            'worker' => UserDTO::fromEntity($rent->getWorker()),
            'car' => CarDTO::fromEntity($rent->getCar()),
            'starts' => $rent->getStarts(),
            'ends' => $rent->getEnds(),
            'createdAt' => $rent->getCreatedAt()
        ]);
    }
    public static function fromEntityArray(array $rents): ArrayCollection
    {
        $collection = new ArrayCollection();
        if(!empty($rents)) {
            foreach ($rents as $rent) {
                $collection->add(self::fromEntity($rent));
            }
        }
        return $collection;
    }
}