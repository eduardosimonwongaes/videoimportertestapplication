<?php

namespace AppBundle\SharedKernel\Domain\ValueObject;

interface CollectionInterface
{
    public function add($element);
}