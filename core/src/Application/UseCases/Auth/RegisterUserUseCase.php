<?php
declare(strict_types=1);

namespace Rentacar\Application\UseCases\Auth;

use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Rentacar\Application\Contracts\UseCases\Auth\RegisterUserUseCaseInterface;
use Rentacar\Application\DTOs\AuthDTOs\Input\RegisterDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Contracts\Repositories\UserRepositoryInterface;
use Rentacar\Domain\Entities\User\Enums\UserTypeEnum;
use Rentacar\Domain\Entities\User\User;

class RegisterUserUseCase implements RegisterUserUseCaseInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {}

    public function execute(RegisterDTO $registerDTO): UserDTO
    {
        $user = new User();
        $user->setName($registerDTO->name);
        $user->setPhone($registerDTO->phone);
        $user->setEmail($registerDTO->email);
        $user->setPassword(Hash::make($registerDTO->password));
        $user->setRole(UserTypeEnum::CUSTOMER->value);
        $user->setVerifyToken(bin2hex(Uuid::uuid4()->toString()));

        $this->userRepository->storeUser($user);

        return UserDTO::fromEntity($user);
    }
}