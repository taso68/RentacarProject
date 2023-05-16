<?php
declare(strict_types=1);

namespace Rentacar\Application\DTOs\UserDTOs\Output;

use Doctrine\Common\Collections\ArrayCollection;
use Rentacar\Application\DTOs\BaseDTO;
use Rentacar\Domain\Entities\User\Enums\UserTypeEnum;
use Rentacar\Domain\Entities\User\User;

class UserDTO extends BaseDTO
{
    public int $id;
    public string $name;
    public int $role;
    public string $phone;

    public static function fromEntity(User $user): self
    {
        return new self([
            'id' => $user->getId(),
            'name' => $user->getName(),
            'role' => $user->getRole(),
            'phone' => $user->getPhone(),
        ]);
    }
    public static function fromEntityArray(array $users): ArrayCollection
    {
        $collection = new ArrayCollection();
        if(!empty($users)) {
            foreach ($users as $user) {
                $collection->add(self::fromEntity($user));
            }
        }
        return $collection;
    }
}