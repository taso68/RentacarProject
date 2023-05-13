<?php
declare(strict_types=1);
namespace Rentacar\Application\DTOs\CarDTOs\Input;

use DateTime;
use Rentacar\Application\DTOs\BaseDTO;

class CreateCarDTO extends BaseDTO
{
    public string $licencePlate;
    public int $year;
    public string $mark;
    public string $model;
    public DateTime $registerDate;

    public static function fromRequest(array $request): self
    {
        return new self([
            'licencePlate' => (string)$request['licencePlate'],
            'year' => (int)$request['year'],
            'mark' => (string)$request['mark'],
            'model' => (string)$request['model'],
            'registerDate' => DateTime::createFromFormat('d-m-Y',$request['registerDate'])
        ]);
    }
}