<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\Input;

use Rentacar\Application\DTOs\BaseDTO;
use DateTime;

class UpdateCarDto extends BaseDTO
{
    public int $id;
    public ?string $licencePlate;
    public ?int $year;
    public ?string $mark;
    public ?string $model;
    public ?DateTime $registerDate;

    public static function fromRequest(array $request): self {
        return new self([
            'licencePlate' => (string)$request['licencePlate'],
            'year' => (int)$request['year'],
            'mark' => (string)$request['mark'],
            'model' => (string)$request['model'],
            'registerDate' => DateTime::createFromFormat('d-m-Y',$request['registerDate'])
        ]);
    }
}