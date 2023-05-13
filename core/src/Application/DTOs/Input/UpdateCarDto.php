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
            'id' => (int) $request['id'],
            'licencePlate' => isset($request['licencePlate']) ? (string)$request['licencePlate'] : null,
            'year' => isset($request['year']) ? (int)$request['year'] : null,
            'mark' => isset($request['mark']) ? (string)$request['mark'] : null,
            'model' => isset($request['model']) ? (string)$request['model'] : null,
            'registerDate' => isset($request['registerDate'])
                ? DateTime::createFromFormat('d-m-Y',$request['registerDate'])
                : null
        ]);
    }
}