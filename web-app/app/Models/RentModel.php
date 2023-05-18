<?php
declare(strict_types=1);

namespace App\Models;

use Rentacar\Application\DTOs\RentDTOs\Output\RentDTO;

class RentModel
{
    public int $id;
    public UserModel $customer;
    public UserModel $worker;

    public CarModel $car;
    public string $starts;
    public string $ends;

    public function __construct(RentDTO $rentDTO)
    {
        $this->id = $rentDTO->id;
        $this->customer = new UserModel($rentDTO->customer);
        $this->worker = new UserModel($rentDTO->worker);
        $this->car = new CarModel($rentDTO->car);
        $this->starts = $rentDTO->starts->format('d-m-Y');
        $this->ends = $rentDTO->ends->format('d-m-Y');
    }
}
