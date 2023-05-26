<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\AuthDTOs\Input;

use App\Http\Requests\Auth\RegisterRequest;
use Rentacar\Application\DTOs\BaseDTO;

class RegisterDTO extends BaseDTO
{
    public string $name;
    public string $phone;
    public string $email;
    public string $password;

    public static function fromRequest(RegisterRequest $request): self
    {
        return new self([
            'name' => (string)$request['name'],
            'phone' => (string)$request['phone'],
            'email' => (string)$request['email'],
            'password' => (string)$request['password'],
        ]);
    }
}