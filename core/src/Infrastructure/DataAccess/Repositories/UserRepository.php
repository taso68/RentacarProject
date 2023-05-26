<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;
use Rentacar\Domain\Entities\User\User;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected string $entity = User::class;

    /**
     * @throws EntityNotFoundException
     */
    public function findUserById(int $id): User
    {
        return $this->findById($id);
    }

    /**
     * @param User $user
     * @return void
     */
    public function saveOrUpdateUser(User $user): void
    {
      $this->createOrUpdate($user);
    }

    public function storeUser(User $user): void
    {
        $this->createOrUpdate($user);
    }
    public function findUserByNameAndPhone(string $name, string $phone): ?User
    {
        return $this->em->getRepository(User::class)->findOneBy(['name' => $name, 'phone' => $phone]);
    }
}