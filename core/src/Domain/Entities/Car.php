<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Car
{
    #[ORM\Id]
    #[ORM\Column(name: "id", type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 12, unique: true)]
    private string $licencePlate;

    #[ORM\Column(type: 'integer')]
    private int $year;
    #[ORM\Column(type: 'string', length: 25)]

    private string $mark;
    #[ORM\Column(type: 'string', length: 25)]
    private string $model;

    #[ORM\Column(type: 'boolean', options: [
        'default' => false
    ])]
    private bool $isRented;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLicencePlate(): string
    {
        return $this->licencePlate;
    }

    /**
     * @param string $licencePlate
     */
    public function setLicencePlate(string $licencePlate): void
    {
        $this->licencePlate = $licencePlate;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->mark;
    }

    /**
     * @param string $mark
     */
    public function setMark(string $mark): void
    {
        $this->mark = $mark;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return bool
     */
    public function isRented(): bool
    {
        return $this->isRented;
    }

    /**
     * @param bool $isRented
     */
    public function setIsRented(bool $isRented): void
    {
        $this->isRented = $isRented;
    }



}