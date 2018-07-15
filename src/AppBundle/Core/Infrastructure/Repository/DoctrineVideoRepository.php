<?php

namespace AppBundle\Core\Infrastructure\Repository;

use AppBundle\Core\Domain\Aggregate\Video;
use AppBundle\Core\Domain\Repository\VideoRepositoryInterface;

class DoctrineVideoRepository implements VideoRepositoryInterface
{
    public function __construct()
    {
    }

    protected function createEntityNotFoundException($id)
    {
        // TODO: Implement createEntityNotFoundException() method.
    }

    protected function getEntityClass()
    {
        return Video::class;
    }

    public function find($id)
    {}

    public function findAll()
    {}

    public function get($id)
    {}

    public function delete($entityId)
    {}

    public function save($entity)
    {}
}