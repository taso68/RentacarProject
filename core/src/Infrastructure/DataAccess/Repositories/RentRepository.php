<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Rentacar\Domain\Contracts\Repositories\RentRepositoryInterface;
use Rentacar\Domain\Entities\Rent;

class RentRepository extends BaseRepository implements RentRepositoryInterface
{
    protected string $entity = Rent::class;

    public function saveOrUpdateRent(Rent $rent): void
    {
        $this->createOrUpdate($rent);
    }

}