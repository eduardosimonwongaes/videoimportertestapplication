<?php

namespace AppBundle\Core\Domain\ValueObject;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;

class Url
{
    /**
     * @var string
     */
    private $url;

    public static function create($url)
    : Url {
        DomainAssertion::url($url);
        return new self($url);
    }

    private function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->url;
    }

}