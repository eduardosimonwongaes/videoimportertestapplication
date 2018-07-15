<?php

namespace AppBundle\Core\Infrastructure\Service\OtherProviderImportService;

use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTOCollection;
use AppBundle\Core\Domain\Service\OtherProviderImport\OtherProviderImportServiceInterface;
use AppBundle\Core\Infrastructure\Service\VideoDataDTOCollectionBuilder\VideoDataDTOCollectionBuilderService;
use AppBundle\SharedKernel\Domain\Service\SftpServiceInterface;
use AppBundle\SharedKernel\Infrastructure\Service\JsonParser\JsonParserService;

class OtherProviderImportService implements OtherProviderImportServiceInterface
{
    private const FTP_FILE_PATH ="/some/path/on/some/server";
    private const FILE_NAME ="otherProviderFile.json";
    private const DESTINATION_LOCAL_PATH ="../../../../../..";
    private const OTHER_PROVIDER_FILE_LOCATION = self::DESTINATION_LOCAL_PATH ."/". self::FILE_NAME;
    private const PROVIDER_NAME = "Other";
    /**
     * @var SftpServiceInterface
     */
    private $sftpService;

    /**
     * @var JsonParserService
     */
    private $jsonParserService;

    /**
     * @var VideoDataDTOCollectionBuilderService
     */
    private $builderService;

    public function __construct(
        SftpServiceInterface $sftpService,
        JsonParserService $jsonParserService,
        VideoDataDTOCollectionBuilderService $builderService
    ){
        $this->sftpService = $sftpService;
        $this->jsonParserService = $jsonParserService;
        $this->builderService = $builderService;
    }

    public function import():VideoDataDTOCollection
    {
        $this->getFileFromFTP();
        $elements = $this->jsonParserService->parse(self::OTHER_PROVIDER_FILE_LOCATION);
        return $this->builderService->build(self::PROVIDER_NAME, $elements['videos']);
    }

    public function getFileFromFTP(): void
    {
        $this->sftpService->connect();
        $this->sftpService->get(
            self::FTP_FILE_PATH . "/" . self::FILE_NAME,
            self::OTHER_PROVIDER_FILE_LOCATION
        );
        $this->sftpService->disconnect();
    }
}