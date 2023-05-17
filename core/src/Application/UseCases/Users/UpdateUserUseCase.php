<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Users;

use Rentacar\Application\Contracts\UseCases\Users\UpdateUserUseCaseInterface;
use Rentacar\Application\DTOs\UserDTOs\Input\UpdateUserDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;

class UpdateUserUseCase implements UpdateUserUseCaseInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {}

    public function execute(UpdateUserDTO $updateUserDTO): UserDTO
    {
        $entity = $this->userRepository->findUserById($updateUserDTO->id);
        $this->userRepository->saveOrUpdateUser(UpdateUserDTO::toEntity($entity, $updateUserDTO));
        return UserDTO::fromEntity($entity);
    }
}