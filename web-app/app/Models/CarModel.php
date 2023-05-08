<?php
declare(strict_types=1);

namespace App\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;
use Rentacar\Application\DTOs\Output\CarDTO;

class CarModel extends BaseModel
{
    public int $id;
    public string $licencePlate;
    public int $year;
    public string $mark;
    public string $model;
    public bool $isRented;

    public function __construct(CarDTO $carDTO)
    {
        $this->id = $carDTO->id;
        $this->licencePlate = $carDTO->licencePlate;
        $this->year = $carDTO->year;
        $this->mark = $carDTO->mark;
        $this->model = $carDTO->model;
        $this->isRented = $carDTO->isRented;
    }

    public static function listModel(ArrayCollection $collection): array
    {
        $list = [];
        if (!$collection->isEmpty()) {
            foreach ($collection as $carDTO) {
                if ($carDTO instanceof CarDTO) {
                    $list[] = new self($carDTO);
                }
            }
        }

        return $list;
    }
}
