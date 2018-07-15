<?php


namespace AppBundle\Core\Infrastructure\Repository;


use AppBundle\SharedKernel\Domain\Persistence\EntityRepositoryInterface;
use AppBundle\SharedKernel\Infrastructure\Persistence\Cassandra\CassandraEntityRepository;

class CassandraVideoRepository extends CassandraEntityRepository implements EntityRepositoryInterface
{
}