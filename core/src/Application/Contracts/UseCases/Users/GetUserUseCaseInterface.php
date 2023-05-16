<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Users;

use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;

interface GetUserUseCaseInterface
{
    public function execute(int $id): UserDTO;

}