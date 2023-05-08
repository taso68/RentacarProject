<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table]
class Rent
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\ManyToOne(targetEntity: Customer::class)]
    #[ORM\JoinColumn(name: 'customer_id', referencedColumnName: 'id')]
    private Customer $customer;

    #[ORM\ManyToOne(targetEntity: Worker::class)]
    #[ORM\JoinColumn(name: 'worker_id', referencedColumnName: 'id')]
    private Worker $worker;

    #[ORM\ManyToOne(targetEntity: Car::class)]
    #[ORM\JoinColumn(name: 'car_id', referencedColumnName: 'id')]
    private Car $car;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private DateTime $createdAt;

    #[ORM\Column(type: 'datetime')]
    private DateTime $starts;

    #[ORM\Column(type: 'datetime')]
    private DateTime $ends;

}