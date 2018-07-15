<?php


namespace AppBundle\Core\Infrastructure\Service\ConsumeAndPersist;

use AppBundle\Core\Domain\Service\ConsumeAndPersist\ConsumeAndPersistInterface;
use AppBundle\Core\Domain\Service\ProcessVideo\ProcessVideoInterface;
use AppBundle\SharedKernel\Domain\Service\QueueServiceInterface;
use PhpAmqpLib\Message\AMQPMessage;

class ConsumeAndPersistService implements ConsumeAndPersistInterface
{

    /**
     * @var QueueServiceInterface
     */
    private $queueService;
    /**
     * @var ProcessVideoInterface
     */
    private $processVideoService;

    public function __construct(
        QueueServiceInterface $queueService,
        ProcessVideoInterface $processVideoService
    )
    {
        $this->queueService = $queueService;
        $this->processVideoService = $processVideoService;
    }

    public function consumeAndPersist()
    {
        $processVideoService = $this->processVideoService;
        $this->queueService->consume(
            QueueServiceInterface::VIDEOIMPORTER_QUEUE_NAME,
            function (AMQPMessage $message) use ($processVideoService){
                    $processVideoService->process($message);
                }
            );
    }


}