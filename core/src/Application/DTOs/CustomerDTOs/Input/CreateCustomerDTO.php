<?php
declare(strict_types=1);
namespace Rentacar\Application\DTOs\CustomerDTOs\Input;

use Rentacar\Application\DTOs\BaseDTO;

class CreateCustomerDTO extends BaseDTO
{
    public string $name;
    public string $phone;

    public static function fromRequest(array $request): self
    {
        return new self([
            'name' => $request['name'],
            'phone' => $request['phone']
        ]);
    }
}