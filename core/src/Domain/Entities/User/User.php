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
    #[ORM\Column(type: 'integer', nullable: false, options:['default' => UserTypeEnum::CUSTOMER])]
    private int $role;
    #[ORM\Column(type: 'string', length: 16, )]
    private string $phone;
    #[ORM\OneToMany(mappedBy: 'worker', targetEntity: Rent::class, cascade: ['remove', 'persist'])]
    private Collection $rents;

    #[ORM\OneToMany( mappedBy: 'customer', targetEntity: Rent::class, cascade: ['remove', 'persist'])]
    private Collection $customerRents;

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
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
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

    /**
     * @return Collection
     */
    public function getCustomerRents(): Collection
    {
        return $this->customerRents;
    }

    /**
     * @param Collection $customerRents
     */
    public function setCustomerRents(Collection $customerRents): void
    {
        $this->customerRents = $customerRents;
    }

    public function addCustomerRent(Rent $rent): void
    {
        $this->customerRents[] = $rent;
    }

}