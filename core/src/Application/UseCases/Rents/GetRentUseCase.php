<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Rents;

use Rentacar\Application\Contracts\UseCases\Rents\GetRentUseCaseInterface;
use Rentacar\Application\DTOs\RentDTOs\Output\RentDTO;
use Rentacar\Domain\Contracts\Repositories\RentRepositoryInterface;

class GetRentUseCase implements GetRentUseCaseInterface
{
    public function __construct(
        private RentRepositoryInterface $rentRepository
    )
    {}

    public function execute(int $id): RentDTO
    {
        return RentDTO::fromEntity($this->rentRepository->getRentById($id));
    }
}