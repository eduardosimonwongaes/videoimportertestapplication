<?php


namespace AppBundle\Core\Application\Service\ImportVideosFromProvider;

use AppBundle\Core\Domain\Service\ImportVideosFromProvider\ImportVideosFromProviderService;
use AppBundle\SharedKernel\Application\Service\RequestInterface;
use AppBundle\SharedKernel\Application\Service\ResponseInterface;
use AppBundle\SharedKernel\Application\Service\UseCase;
use AppBundle\SharedKernel\Application\Service\UseCaseInterface;

class ImportVideosFromProviderUseCase extends UseCase implements UseCaseInterface
{

    /**
     * @var ImportVideosFromProviderService
     */
    private $importVideosFromProviderService;

    public function __construct(
        ImportVideosFromProviderService $importVideosFromProviderService
    ) {
        $this->importVideosFromProviderService = $importVideosFromProviderService;
    }

    /**
     * @param ImportVideosFromProviderRequest|RequestInterface $request
     * @return ResponseInterface
     */
    public function execute(RequestInterface $request): ResponseInterface
    {
        $this->importVideosFromProviderService->import(
            $request->getProviderName(),
            $request->getOmitQueues()
        );

        return new ImportVideosFromProviderResponse();
    }
}