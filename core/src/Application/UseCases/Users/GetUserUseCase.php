<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Users;

use Rentacar\Application\Contracts\UseCases\Users\GetUserUseCaseInterface;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;

class GetUserUseCase implements GetUserUseCaseInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {}

    public function execute(int $id): UserDTO
    {
        return UserDTO::fromEntity(
            $this->userRepository->findUserById($id)
        );
    }
}