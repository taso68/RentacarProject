<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Users;

use Rentacar\Application\DTOs\UserDTOs\Input\CreateUserDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;

interface CreateUserUseCaseInterface
{
    public function execute(CreateUserDTO $createUserDTO): UserDTO;

}