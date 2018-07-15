<?php

namespace AppBundle\Core\Infrastructure\Service\GlorfImport;

use AppBundle\Core\Domain\Service\GlorfImport\GlorfImportServiceInterface;
use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTO;
use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTOCollection;
use AppBundle\Core\Infrastructure\Service\VideoDataDTOCollectionBuilder\VideoDataDTOCollectionBuilderService;
use AppBundle\SharedKernel\Infrastructure\Service\JsonParser\JsonParserService;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;

class GlorfImportService implements GlorfImportServiceInterface
{
    const PROVIDER_NAME = "Glorf";
    const GLORF_FILE_NAME = "glorf.json";
    /**
     * @var JsonParserService
     */
    private $jsonParserService;
    /**
     * @var VideoDataDTOCollectionBuilderService
     */
    private $builderService;

    public function __construct(
        JsonParserService $jsonParserService,
        VideoDataDTOCollectionBuilderService $builderService
    ){
        $this->jsonParserService = $jsonParserService;
        $this->builderService = $builderService;
    }

    public function import(): VideoDataDTOCollection
    {
        OutputService::output("Getting Glorf videos");
        $elements = $this->jsonParserService->parse(self::GLORF_FILE_NAME);
        return $this->builderService->build(self::PROVIDER_NAME,$elements['videos']);
    }
}