<?php

namespace AppBundle\Core\Domain\ValueObject;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;

class Label
{
    /**
     * @var string
     */
    private $label;

    public static function create($label)
    : Label {
        DomainAssertion::string($label);

        return new self($label);
    }

    private function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->label;
    }

}