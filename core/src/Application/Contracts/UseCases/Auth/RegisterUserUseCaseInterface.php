<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Auth;

use Rentacar\Application\DTOs\AuthDTOs\Input\RegisterDTO;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;

interface RegisterUserUseCaseInterface
{
    public function execute(RegisterDTO $registerDTO): UserDTO;

}