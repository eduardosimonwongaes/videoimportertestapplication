<?php

namespace AppBundle\Core\Domain\ValueObject;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;
use AppBundle\SharedKernel\Domain\ValueObject\CollectionInterface;

class LabelCollection implements CollectionInterface
{

    /**
     * @var Label[]
     */
    private $labels = [];

    public static function create()
    : LabelCollection{

        return new self();
    }

    private function __construct()
    {}

    public function add($label)
    {
        DomainAssertion::isInstanceOf($label, Label::class);
        $this->labels[]= $label;
    }

    public function asCommaSepparatedString()
    : string{
        $array= [];
        foreach($this->labels as $label){
            $array[]= $label->getValue();
        }
        return implode(",",$array);
    }
}