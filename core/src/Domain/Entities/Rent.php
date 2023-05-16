<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Rent
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Customer::class, inversedBy: 'rents')]
    #[ORM\JoinColumn(name: 'customer_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private Customer $customer;

    #[ORM\ManyToOne(targetEntity: Worker::class)]
    #[ORM\JoinColumn(name: 'worker_id', referencedColumnName: 'id', nullable: false)]
    private Worker $worker;

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
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return Worker
     */
    public function getWorker(): Worker
    {
        return $this->worker;
    }

    /**
     * @param Worker $worker
     */
    public function setWorker(Worker $worker): void
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