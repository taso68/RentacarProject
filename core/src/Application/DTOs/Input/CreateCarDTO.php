<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\Input;

use Rentacar\Application\DTOs\BaseDTO;

class CreateCarDTO extends BaseDTO
{
    public string $licencePlate;
    public int $year;
    public string $mark;
    public string $model;

    public static function fromRequest(array $request): self
    {
        return new self([
            'licencePlate' => (string)$request['$licencePlate'],
            'year' => (int)$request['$year'],
            'mark' => (string)$request['$mark'],
            'model' => (string)$request['$model'],
        ]);
    }
}