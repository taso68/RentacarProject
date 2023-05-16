<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;

use DateTime;
use Rentacar\Domain\Entities\User\User;

#[ORM\Entity]
#[ORM\Table]
class Rent
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'rents')]
    #[ORM\JoinColumn(name: 'customer_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private User $customer;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'worker_id', referencedColumnName: 'id', nullable: false)]
    private User $worker;

    #[ORM\ManyToOne(targetEntity: Car::class, inversedBy: 'rents')]
    #[ORM\JoinColumn(name: 'car_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private Car $car;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private DateTime $createdAt;

    #[ORM\Column(type: 'datetime')]
    private DateTime $starts;

    #[ORM\Column(type: 'datetime')]
    private DateTime $ends;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getCustomer(): User
    {
        return $this->customer;
    }

    /**
     * @param User $customer
     */
    public function setCustomer(User $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return User
     */
    public function getWorker(): User
    {
        return $this->worker;
    }

    /**
     * @param User $worker
     */
    public function setWorker(User $worker): void
    {
        $this->worker = $worker;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @param Car $car
     */
    public function setCar(Car $car): void
    {
        $this->car = $car;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return DateTime
     */
    public function getStarts(): DateTime
    {
        return $this->starts;
    }

    /**
     * @param DateTime $starts
     */
    public function setStarts(DateTime $starts): void
    {
        $this->starts = $starts;
    }

    /**
     * @return DateTime
     */
    public function getEnds(): DateTime
    {
        return $this->ends;
    }

    /**
     * @param DateTime $ends
     */
    public function setEnds(DateTime $ends): void
    {
        $this->ends = $ends;
    }
}