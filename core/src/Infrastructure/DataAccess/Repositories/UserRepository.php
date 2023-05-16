<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;
use Rentacar\Domain\Entities\User\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function findUserById(int $id): User
    {
    }

    public function saveOrUpdateUser(User $customer): void
    {
    }

    public function findUserByNameAndPhone(string $name, string $phone): ?User
    {
    }
}