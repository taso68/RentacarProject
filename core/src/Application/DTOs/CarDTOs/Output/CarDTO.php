<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\CarDTOs\Output;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Domain\Entities\Car;

class CarDTO extends BaseDTO
{
    public int $id;
    public string $licencePlate;
    public int $year;
    public string $mark;
    public string $model;
    public bool $isRented;
    public ?DateTime $registerDate;



    public static function fromEntity(Car $car): self
    {
        return new self([
            'id' => $car->getId(),
            'licencePlate' => $car->getLicencePlate(),
            'year' => $car->getYear(),
            'mark' => $car->getMark(),
            'model' => $car->getModel(),
            'isRented' => $car->isRented(),
            'registerDate' => $car->getRegisterDate()
        ]);
    }

    public static function fromEntityArray(array $cars): ArrayCollection
    {
        $collection = new ArrayCollection();
        if(!empty($cars)) {
            foreach ($cars as $car) {
                $collection->add(self::fromEntity($car));
            }
        }
        return $collection;
    }


}