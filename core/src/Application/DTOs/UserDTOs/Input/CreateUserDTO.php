<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\UserDTOs\Input;

use App\Http\Requests\User\CreateUserRequest;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Domain\Entities\User\Enums\UserTypeEnum;

class CreateUserDTO extends  BaseDTO
{
    public string $name;
    public string $phone;
    public int $role;

    public static function fromRequest(CreateUserRequest $request): self
    {
        return new self([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'role' => $request['role'] ?? UserTypeEnum::CUSTOMER->value
        ]);
    }
}