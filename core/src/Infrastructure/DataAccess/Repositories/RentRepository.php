<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Rentacar\Domain\Contracts\Repositories\RentRepositoryInterface;
use Rentacar\Domain\Entities\Rent;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

class RentRepository extends BaseRepository implements RentRepositoryInterface
{
    protected string $entity = Rent::class;
    /**
     * @throws EntityNotFoundException
     */
    public function getRentById(int $id): Rent
    {
        return $this->findById($id);
    }
    public function saveOrUpdateRent(Rent $rent): void
    {
        $this->createOrUpdate($rent);
    }

}