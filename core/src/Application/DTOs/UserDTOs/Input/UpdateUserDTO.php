<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\UserDTOs\Input;

use App\Http\Requests\User\UpdateUserRequest;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Domain\Entities\User\User;

class UpdateUserDTO extends BaseDTO
{
    public int $id;
    public ?string $name;
    public  ?string $phone;
    public  ?int $role;

    public static function fromRequest(UpdateUserRequest $request): self
    {
        return new self([
            'id' => (int)$request['id'],
            'name' => (string)$request['name'] ?? null,
            'phone' => (string)$request['phone'] ?? null,
            'role' => (int)$request['role'] ?? null,
        ]);
    }
    public static function toEntity(User $user, UpdateUserDTO $updateUserDTO): User
    {
        if($updateUserDTO->name) $user->setName($updateUserDTO->name);
        if($updateUserDTO->phone) $user->setPhone($updateUserDTO->phone);
        if($updateUserDTO->role) $user->setRole($updateUserDTO->role);

        return $user;
    }
}