<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Rents;

use Rentacar\Application\Contracts\UseCases\Rents\CreateRentUseCaseInterface;
use Rentacar\Application\DTOs\RentDTOs\Input\CreateRentDTO;
use Rentacar\Domain\Contracts\Repositories\CarRepositoryInterface;
use Rentacar\Domain\Contracts\Repositories\RentRepositoryInterface;
use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;
use Rentacar\Domain\Entities\Rent;
use Rentacar\Infrastructure\DataAccess\Repositories\RentRepository;

class CreateRentUseCase implements CreateRentUseCaseInterface
{
    public function __construct(
        private CarRepositoryInterface $carRepository,
        private UserRepositoryInterface $userRepository,
        private RentRepositoryInterface $rentRepository,
    )
    {}

    public function execute(CreateRentDTO $createRentDTO)
    {
        $newRent = new Rent();
        $car = $this->carRepository->getCarById($createRentDTO->car_id);
        $customer = $this->userRepository->findUserById($createRentDTO->customer_id);
        $worker = $this->userRepository->findUserById($createRentDTO->worker_id);

        $newRent->setCar($car);
        $newRent->setCustomer($customer);
        $newRent->setWorker($worker);
        $newRent->setStarts($createRentDTO->starts);
        $newRent->setEnds($createRentDTO->ends);

        $this->rentRepository->saveOrUpdateRent($newRent);
    }
}