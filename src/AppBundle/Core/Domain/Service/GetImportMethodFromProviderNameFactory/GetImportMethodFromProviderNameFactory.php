<?php

namespace AppBundle\Core\Domain\Service\GetImportMethodFromProviderNameFactory;

use AppBundle\Core\Domain\Exception\InvalidProviderException;
use AppBundle\Core\Domain\Service\FlubImport\FlubImportServiceInterface;
use AppBundle\Core\Domain\Service\GlorfImport\GlorfImportServiceInterface;
use AppBundle\Core\Domain\Service\OtherProviderImport\OtherProviderImportServiceInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class GetImportMethodFromProviderNameFactory
{
    const FLUB = "flub";
    const GLORF = "glorf";
    const OTHER = "other";

    const AVAILABLE_PROVIDERS = [
        self::FLUB,
        self::GLORF
    ];

    const NAME_TO_IMPORT_SERVICE = [
        self::FLUB => 'videoconsumer.core.infrastructure.service.flub_import.flub_import_service',
        self::GLORF => 'videoconsumer.core.infrastructure.service.glorf_import.glorf_import_service',
        self::OTHER => 'videoconsumer.core.infrastructure.service.other_provider_import.other_provider_import_service'
    ];

    /**
     * @var FlubImportServiceInterface
     */
    private $flubImportService;
    /**
     * @var GlorfImportServiceInterface
     */
    private $glorfImportService;
    /**
     * @var OtherProviderImportServiceInterface
     */
    private $otherProviderImportService;
    /**
     * @var Container
     */
    private $container;

    public function __construct(
        FlubImportServiceInterface $flubImportService,
        GlorfImportServiceInterface $glorfImportService,
        OtherProviderImportServiceInterface $otherProviderImportService,
        Container $container
    )
    {
        $this->flubImportService = $flubImportService;
        $this->glorfImportService = $glorfImportService;
        $this->otherProviderImportService = $otherProviderImportService;
        $this->container = $container;
    }

    public function get($name)
    {
        if(!$this->isValid($name)){
            throw new InvalidProviderException("Provider with id $name has not been found");
        }
        return $this->container->get(self::NAME_TO_IMPORT_SERVICE[$name]);
    }

    private function isValid($name)
    {
        return in_array($name,self::AVAILABLE_PROVIDERS);
    }
}