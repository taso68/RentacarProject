<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities\User;

use Doctrine\Common\Collections\Collection;
use Rentacar\Domain\Entities\Rent;
use Rentacar\Domain\Entities\User\Enums\UserTypeEnum;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table]
#[ORM\Entity]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;
    #[ORM\Column(type: 'string', length: 25, )]
    private string $name;
    private UserTypeEnum $role;
    #[ORM\Column(type: 'string', length: 16, )]
    private string $phone;
    #[ORM\OneToMany(mappedBy: 'worker', targetEntity: Rent::class, cascade: ['remove', 'persist'], fetch: 'LAZY')]
    private Collection $rents;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return UserTypeEnum
     */
    public function getRole(): UserTypeEnum
    {
        return $this->role;
    }

    /**
     * @param UserTypeEnum $role
     */
    public function setRole(UserTypeEnum $role): void
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return Collection
     */
    public function getRents(): Collection
    {
        return $this->rents;
    }

    /**
     * @param Collection $rents
     */
    public function setRents(Collection $rents): void
    {
        $this->rents = $rents;
    }

    public function addRent(Rent $rent): void
    {
        $this->rents[] = $rent;
    }
}