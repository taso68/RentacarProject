<?php
declare(strict_types=1);

namespace Rentacar\Domain\Contracts\Repositories;

use Rentacar\Domain\Entities\User\User;

interface UserRepositoryInterface
{
    public function findUserById(int $id): User;
    public function saveOrUpdateUser(User $customer): void;
    public function findUserByNameAndPhone(string $name, string $phone): ?User;

}