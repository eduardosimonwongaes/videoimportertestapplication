<?php


namespace AppBundle\Core\Domain\Repository;


use AppBundle\SharedKernel\Domain\Persistence\EntityRepositoryInterface;

interface VideoRepositoryInterface extends EntityRepositoryInterface
{
    public function save($entity);
}