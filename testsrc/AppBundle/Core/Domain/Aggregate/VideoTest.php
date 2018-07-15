<?php

namespace AppBundle\Core\Domain\Aggregate;

use AppBundle\Core\Domain\ValueObject\LabelCollection;
use AppBundle\Core\Domain\ValueObject\Name;
use AppBundle\Core\Domain\ValueObject\Url;
use PHPUnit\Framework\TestCase;
use Test\AppBundle\Core\Domain\Entity\FakeVideoBuilder;

class VideoTest extends TestCase
{
    public function testThatCreatingAVideoShouldHaveItsTypesSetProperly()
    {
        $fakeVideo = FakeVideoBuilder::build();
        $this->assertInstanceOf(LabelCollection::class,$fakeVideo->getLabels());
        $this->assertInstanceOf(Url::class,$fakeVideo->getUrl());
        $this->assertInstanceOf(Name::class,$fakeVideo->getName());

    }
}
