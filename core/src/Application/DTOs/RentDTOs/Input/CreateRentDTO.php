<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\RentDTOs\Input;

use App\Http\Requests\Rent\CreateRentRequest;
use Rentacar\Application\DTOs\BaseDTO;
use DateTime;

class CreateRentDTO extends BaseDTO
{
    public int $customer_id;
    public int $worker_id;
    public int $car_id;
    public DateTime $starts;
    public DateTime $ends;

    public static function fromRequest(array $request): self
    {
        return new self([
            'customer_id' => (int)$request['customer_id'],
            'worker_id' => (int)$request['worker_id'],
            'car_id' => (int)$request['car_id'],
            'starts' => DateTime::createFromFormat('d-m-Y', $request['starts']),
            'ends' => DateTime::createFromFormat('d-m-Y', $request['ends']),
        ]);
    }
}