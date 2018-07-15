<?php

namespace AppBundle\Core\Infrastructure\Service\VideoDataDTOCollectionBuilder;

use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTO;
use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTOCollection;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;

class VideoDataDTOCollectionBuilderService
{
    //TODO this doesn't makes sense as each provider has a different data structure
    //TODO the point for this was that both glorf and blub had the same data format at first glance
    //TODO each import service for each provider should have its own databuilder

    public function build($providerName,$elements): VideoDataDTOCollection
    {
        if($providerName == "Flub")
        {
            return $this->buildForFlub($elements);
        }else{
            return $this->buildForGlorf($elements);
        }
    }

    private function buildForGlorf($elements): VideoDataDTOCollection
    {
        $collection = VideoDataDTOCollection::create();
        foreach ($elements as $element) {
            $labels = $element['tags'] ?? null;
            $collection->add(
                new VideoDataDTO(
                    $element['title'],
                    $element['url'],
                    implode(",",$labels)
                )
            );
        }
        return $collection;
    }

    private function buildForFlub($elements):VideoDataDTOCollection
    {
        $collection = VideoDataDTOCollection::create();
        foreach ($elements as $element) {
            //OutputService::output($element['labels']);
            $labels = (isset($element['labels'])) ? $element['labels']: null;
            $collection->add(
                new VideoDataDTO(
                    $element['name'],
                    $element['url'],
                    $labels
                )
            );
        }

        return $collection;

    }
}