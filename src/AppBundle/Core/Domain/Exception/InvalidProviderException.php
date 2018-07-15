<?php


namespace AppBundle\Core\Domain\Exception;


use AppBundle\SharedKernel\Domain\Exception\DomainException;

class InvalidProviderException extends DomainException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}