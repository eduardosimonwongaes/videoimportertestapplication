<?php

namespace AppBundle\Core\Infrastructure\Service\ProcessVideo;

use AppBundle\Core\Domain\Aggregate\Video;
use AppBundle\Core\Domain\Repository\VideoRepositoryInterface;
use AppBundle\Core\Domain\Service\ProcessVideo\ProcessVideoInterface;
use AppBundle\Core\Domain\ValueObject\LabelCollection;
use AppBundle\Core\Domain\ValueObject\Name;
use AppBundle\Core\Domain\ValueObject\Url;
use AppBundle\Core\Infrastructure\DataTransformer\MessageDataTransformer;
use AppBundle\Core\Infrastructure\Service\BuildVideoAggregate\BuildVideoAggregateService;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;
use PhpAmqpLib\Message\AMQPMessage;

class ProcessVideoService implements ProcessVideoInterface
{

    /**
     * @var MessageDataTransformer
     */
    private $messageDataTransformer;
    /**
     * @var VideoRepositoryInterface
     */
    private $videoRepository;
    /**
     * @var BuildVideoAggregateService
     */
    private $buildVideoAggregateService;


    public function __construct(
        MessageDataTransformer $messageDataTransformer,
        VideoRepositoryInterface $videoRepository,
        BuildVideoAggregateService $buildVideoAggregateService
    )
    {
        $this->messageDataTransformer = $messageDataTransformer;
        $this->videoRepository = $videoRepository;
        $this->buildVideoAggregateService = $buildVideoAggregateService;
    }

    public function process(AMQPMessage $message)
    {
        $businessMessage = $this->messageDataTransformer->fromAMQPMessage($message)->getBody();
        $video = $this->buildVideoAggregateService->build(
            $businessMessage['labels'],
            $businessMessage['name'],
            $businessMessage['url']
        );
        OutputService::output('importing: \"'.
            $video->getName()->getValue().
            '\"; Url:'.
            $video->getUrl()->getValue().
            'Tags:'.
            $video->getLabels()->asCommaSepparatedString()
        );
        $this->videoRepository->save($video);
    }

}