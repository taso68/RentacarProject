<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\DataAccess\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Rentacar\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

abstract class BaseRepository
{
    protected string $entity;

    public function __construct(
        protected EntityManagerInterface $em
    )
    {}

    /**
     * @throws EntityNotFoundException
     */
    protected function findById(float $id): object
    {
        $entity = $this->em->find($this->entity, $id);

        if(!$entity) {
            throw new EntityNotFoundException();
        }

        return $entity;
    }

    /**
     * @throws EntityNotFoundException
     */
    protected function findAll(): array
    {
        $cars = $this->em->getRepository($this->entity)->findAll();

        if(!$cars) {
            throw new EntityNotFoundException();
        }

        return $cars;
    }

    protected function createOrUpdate(object $entity): void
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
    protected function delete(object $entity): void
    {
        $this->em->remove($entity);
    }
}