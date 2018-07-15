<?php

namespace AppBundle\Core\Application\Services\ConsumeFromQueue;

use AppBundle\Core\Domain\Service\ConsumeAndPersist\ConsumeAndPersistInterface;
use AppBundle\SharedKernel\Application\Service\RequestInterface;
use AppBundle\SharedKernel\Application\Service\UseCase;
use AppBundle\SharedKernel\Application\Service\UseCaseInterface;

class ConsumeFromQueueUseCase extends UseCase implements UseCaseInterface
{

    /**
     * @var ConsumeAndPersistInterface
     */
    private $consumeFromQueueService;

    public function __construct(ConsumeAndPersistInterface $consumeFromQueueService)
    {
        $this->consumeFromQueueService = $consumeFromQueueService;
    }

    public function execute(RequestInterface $request): ConsumeFromQueueResponse
    {
        $this->consumeFromQueueService->consumeAndPersist();

        return new ConsumeFromQueueResponse();
    }
}