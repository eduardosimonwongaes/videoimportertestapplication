<?php

namespace AppBundle\Core\Infrastructure\Service\BuildVideoAggregate;

use AppBundle\Core\Domain\Aggregate\Video;
use AppBundle\Core\Domain\ValueObject\Label;
use AppBundle\Core\Domain\ValueObject\LabelCollection;
use AppBundle\Core\Domain\ValueObject\Name;
use AppBundle\Core\Domain\ValueObject\Url;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;

class BuildVideoAggregateService
{
    public function build($labels, $name , $url)
    {
        return Video::create(
            $this->buildLabelCollection($labels),
            Name::create($name),
            Url::create($url)
        );
    }

    private function buildLabelCollection($labels)
    {
        $labelCollection = LabelCollection::create();

        foreach(explode(",",$labels) as $label) {
            $labelCollection->add(
                Label::create($label)
            );
        }

        return $labelCollection;
    }
}