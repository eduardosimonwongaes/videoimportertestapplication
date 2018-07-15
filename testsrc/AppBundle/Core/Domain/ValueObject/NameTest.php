<?php

namespace AppBundle\Core\Domain\ValueObject;


use Assert\AssertionFailedException;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testThatPassingAValidArgumentShouldCreateTheValueObjectProperly()
    {
        $name= "ldkfjsldkfjs";
        $nameValueObject = Name::create($name);
        $this->assertEquals($name,$nameValueObject->getValue());
    }

    public function testThatPassingAnInvalidArgumentShouldThrowAnException()
    {
        $name=4345345;
        $this->expectException(AssertionFailedException::class);
        $nameValueObject = Name::create($name);
    }
}
