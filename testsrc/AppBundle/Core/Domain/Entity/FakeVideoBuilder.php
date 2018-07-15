<?php

namespace Test\AppBundle\Core\Domain\Entity;

use AppBundle\Core\Domain\Aggregate\Video;
use AppBundle\Core\Domain\ValueObject\LabelCollection;
use AppBundle\Core\Domain\ValueObject\Name;
use AppBundle\Core\Domain\ValueObject\Url;

class FakeVideoBuilder
{
    const FAKE_NAME = "SuperVideo";
    const FAKE_URL = "http://supersource.com/video/tag/4";
    const FAKE_LABELS = "nice,things,to,come";

    public static function build(
        $label = self::FAKE_LABELS,
        $name = self::FAKE_NAME,
        $url = self::FAKE_URL
    ): Video{
        return Video::create(
            LabelCollection::create(),
            Name::create($name),
            Url::create($url)
        );
    }
}