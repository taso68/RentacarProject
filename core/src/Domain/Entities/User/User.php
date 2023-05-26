<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities\User;

use DateTime;
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
    #[ORM\Column(type: 'string', length: 16, )]
    private string $phone;
    #[ORM\Column(type: 'string', length: 16, )]
    private string $email;
    #[ORM\Column(type: 'string', length: 50, )]
    private string $password;
    #[ORM\Column(type: 'integer', nullable: false, options:['default' => UserTypeEnum::CUSTOMER])]
    private int $role;

    #[ORM\Column(type: 'string', length: 150)]
    private ?string $verifyToken;

    #[ORM\Column(name: 'email_verified_at', type: 'datetime', nullable: true)]
    private ?DateTime $emailVerifiedAt =  null;

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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getVerifyToken(): ?string
    {
        return $this->verifyToken;
    }

    /**
     * @param string|null $verifyToken
     */
    public function setVerifyToken(?string $verifyToken): void
    {
        $this->verifyToken = $verifyToken;
    }

    /**
     * @return DateTime|null
     */
    public function getEmailVerifiedAt(): ?DateTime
    {
        return $this->emailVerifiedAt;
    }

    /**
     * @param DateTime|null $emailVerifiedAt
     */
    public function setEmailVerifiedAt(?DateTime $emailVerifiedAt): void
    {
        $this->emailVerifiedAt = $emailVerifiedAt;
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