<?php

namespace SharedKernel\Infrastructure\Persistence\Doctrine;

use AppBundle\SharedKernel\Domain\Persistence\EntityRepositoryInterface;
use Doctrine\ORM\EntityManager;

class DoctrineEntityRepository implements EntityRepositoryInterface
{

    /**
     * @var EntityManager
     */
    private $entityManager;
    private $entityRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->entityRepository = $this->entityManager->getRepository($this->getEntityClass());
    }

    public function find($id)
    {
        return $this->entityRepository()->find($id);
    }

    public function findAll()
    {
        return $this->entityRepository()->findAll();
    }

    public function get($id)
    {
        $entity = self::find($id);
        if (null === $entity) {
            throw $this->createEntityNotFoundException($id);
        }
        return $entity;
    }
    /**
     * @param $entity
     */
    public function save($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush($entity);
    }

    public function delete($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush($entity);
    }

    private function entityRepository()
    {
        return $this->entityRepository;
    }

}