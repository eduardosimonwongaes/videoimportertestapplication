<?php

namespace AppBundle\SharedKernel\Domain\Persistence;

interface EntityRepositoryInterface
{
    public function find($id);

    public function findAll();

    public function get($id);

    public function save($entity);

    public function delete($entity);
}