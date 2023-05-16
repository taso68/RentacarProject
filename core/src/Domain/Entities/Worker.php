<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Worker
{
    #[ORM\Id]
    #[ORM\Column(name: "id", type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;
    #[ORM\Column(type: 'string', length: 16)]
    private string $name;

    #[ORM\OneToMany(mappedBy: 'worker', targetEntity: Rent::class, cascade: ['remove', 'persist'], fetch: 'LAZY')]
    private Collection $rents;

    public function __construct()
    {
        $this->rents = new ArrayCollection();
    }

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