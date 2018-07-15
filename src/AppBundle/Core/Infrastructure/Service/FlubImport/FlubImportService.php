<?php

namespace AppBundle\Core\Infrastructure\Service\FlubImport;

use AppBundle\Core\Domain\Service\FlubImport\FlubImportServiceInterface;
use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTO;
use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTOCollection;
use AppBundle\Core\Infrastructure\Service\VideoDataDTOCollectionBuilder\VideoDataDTOCollectionBuilderService;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;
use AppBundle\SharedKernel\Infrastructure\Service\YamlParser\YamlParserService;

class FlubImportService implements FlubImportServiceInterface
{
    const PROVIDER_NAME = "Flub";
    const FLUB_FILE_NAME = "flub.yaml";
    /**
     * @var YamlParserService
     */
    private $parserService;
    /**
     * @var VideoDataDTOCollectionBuilderService
     */
    private $builderService;

    public function __construct(
        YamlParserService $parserService,
        VideoDataDTOCollectionBuilderService $builderService
    )
    {
        $this->parserService = $parserService;
        $this->builderService = $builderService;
    }

    public function import(): VideoDataDTOCollection
    {
        OutputService::output("Getting Flub videos");
        $elements = $this->parserService->parse(self::FLUB_FILE_NAME);
        return $this->builderService->build(self::PROVIDER_NAME, $elements);
    }
}