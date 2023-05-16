<?php
declare(strict_types=1);

namespace App\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\UserDTOs\Output\UserDTO;
use Rentacar\Domain\Entities\User\User;

class UserModel extends BaseModel
{
    public int $id;
    public string $name;
    public string $phone;

    public function __construct(UserDTO $user)
    {
        $this->id = $user->id;
        $this->name = $user->name;
        $this->phone = $user->phone;
    }


    public static function listModel(ArrayCollection $collection): array
    {
        $list = [];
        if (!$collection->isEmpty()) {
            foreach ($collection as $userDto) {
                if ($userDto instanceof UserDTO) {
                    $list[] = new self($userDto);
                }
            }
        }
        return $list;
    }
}
