<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table]
#[ORM\Entity]
class Customer
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 25, )]
    private string $name;
    #[ORM\Column(type: 'string', length: 16, )]
    private string $phone;

    #[ORM\OneToMany(mappedBy: 'customer', targetEntity: Rent::class, cascade: ['persist'], fetch: 'LAZY')]
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
     * @param Rent $rent
     */
    public function addRent(Rent $rent): void
    {
        $this->rents[] = $rent;
    }
}