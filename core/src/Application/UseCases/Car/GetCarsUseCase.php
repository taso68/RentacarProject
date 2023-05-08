<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Car;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\Contracts\UseCases\Car\GetCarsUseCaseInterface;
use Rentacar\Application\DTOs\Output\CarDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;
//use Rentacar\Domain\Entities\Rent;
//use Rentacar\Domain\Entities\Worker;

class GetCarsUseCase implements GetCarsUseCaseInterface
{
    public function __construct(
        private CarRepositoryInterface $carRepository
    )
    {}

    public function execute(): ArrayCollection
    {
//        /** @var Worker $worker */
//        $worker = $this->carRepository->getWorkerById(1);
//
//        $nekiIdZaBrisanje = 3;
//
//        $rentForDelete = $worker->getRents()->filter(function (Rent $rent) use($nekiIdZaBrisanje) {
//            return $rent->getId() === $nekiIdZaBrisanje;
//        })->first();
//
//        if ($rentForDelete) {
//            $worker->getRents()->removeElement($rentForDelete);
//        }
//
//        foreach ()


        return CarDTO::fromEntityArray($this->carRepository->getAllCars());
    }
}