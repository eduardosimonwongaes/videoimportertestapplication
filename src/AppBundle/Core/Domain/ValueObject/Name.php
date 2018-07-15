<?php

namespace AppBundle\Core\Domain\ValueObject;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;

class Name
{
    /**
     * @var string
     */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function create($name): Name
    {
        DomainAssertion::string($name);
        return new self($name);
    }

    /**
     * @return Name
     */
    public function getValue(): string
    {
        return $this->name;
    }

}