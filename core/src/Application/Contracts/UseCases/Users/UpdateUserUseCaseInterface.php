<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Users;

use App\Http\Requests\User\UpdateUserRequest;
use Rentacar\Application\DTOs\UserDTOs\Input\UpdateUserDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;

interface UpdateUserUseCaseInterface
{
    public function execute(UpdateUserDTO $updateUserDTO): UserDTO;
}