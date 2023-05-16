<?php
declare(strict_types=1);

namespace App\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\CustomerDTOs\Output\CustomerDTO;

class CustomerModel extends BaseModel
{
    public int $id;
    public string $name;
    public string $phone;

    public function __construct(CustomerDTO $customerDTO)
    {
        $this->id = $customerDTO->id;
        $this->name = $customerDTO->name;
        $this->phone = $customerDTO->phone;
    }


    public static function listModel(ArrayCollection $collection): array
    {
        $list = [];
        if (!$collection->isEmpty()) {
            foreach ($collection as $customerDto) {
                if ($customerDto instanceof CustomerDTO) {
                    $list[] = new self($customerDto);
                }
            }
        }
        return $list;
    }
}
