<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Users;

use Rentacar\Application\Contracts\UseCases\Users\CreateUserUseCaseInterface;
use Rentacar\Application\DTOs\UserDTOs\Input\CreateUserDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;
use Rentacar\Domain\Entities\User\User;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityAlreadyExistException;

class CreateUserUseCase implements CreateUserUseCaseInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {}

    /**
     * @throws EntityAlreadyExistException
     */
    public function execute(CreateUserDTO $createUserDTO): UserDTO
    {
        if($this->userRepository->findUserByNameAndPhone($createUserDTO->name, $createUserDTO->phone))
        {
            throw new EntityAlreadyExistException("User with name $createUserDTO->name and phone $createUserDTO->phone already exist", 409);
        }

        $user = new User();
        $user->setName($createUserDTO->name);
        $user->setPhone($createUserDTO->phone);
        $user->setRole($createUserDTO->role);

        $this->userRepository->saveOrUpdateUser($user);

        return UserDTO::fromEntity($user);
    }
}