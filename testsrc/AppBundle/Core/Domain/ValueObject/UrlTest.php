<?php

namespace AppBundle\Core\Domain\ValueObject;

use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{
    public function testThatPassingAValidUrlShouldCreateTheObjectProperly()
    {
        $fakeURL = "http://www.google.com";
        $urlValueObject = Url::create($fakeURL);
        $this->assertInstanceOf(Url::class,$urlValueObject);
        $this->assertEquals($fakeURL,$urlValueObject->getValue());

    }
}
