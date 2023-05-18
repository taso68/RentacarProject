<?php
declare(strict_types=1);

namespace Rentacar\Domain\Contracts\Repositories;

use Rentacar\Domain\Entities\Rent;

interface RentRepositoryInterface
{
    public function saveOrUpdateRent(Rent $rent): void;
    public function getRentById(int $id): Rent;

}