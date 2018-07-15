<?php


namespace AppBundle\Core\Domain\Service\ImportVideosFromProvider;

use AppBundle\Core\Domain\Service\GetImportMethodFromProviderNameFactory\GetImportMethodFromProviderNameFactory;
use AppBundle\Core\Domain\Service\ImportServiceInterface\ImportServiceInterface;
use AppBundle\Core\Domain\Service\ProcessVideo\ProcessVideoInterface;
use AppBundle\SharedKernel\Domain\Service\QueueServiceInterface;
use AppBundle\SharedKernel\Domain\ValueObject\Message;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;

class ImportVideosFromProviderService
{
    /**
     * @var GetImportMethodFromProviderNameFactory
     */
    private $getImportMethodFromProviderNameFactory;
    /**
     * @var QueueServiceInterface
     */
    private $queueService;

    /**
     * @var bool
     */
    private $omitQueues;
    /**
     * @var ProcessVideoInterface
     */
    private $processVideoService;


    public function __construct(
        GetImportMethodFromProviderNameFactory $getImportMethodFromProviderNameFactory,
        QueueServiceInterface $queueService,
        ProcessVideoInterface $processVideoService
    ) {
        $this->getImportMethodFromProviderNameFactory = $getImportMethodFromProviderNameFactory;
        $this->queueService = $queueService;
        $this->omitQueues = true;
        $this->processVideoService = $processVideoService;
    }

    public function import(
        string $providerName = null,
        bool $omitQueues = true
    ) {
        /** @var ImportServiceInterface $method */

        /** @var VideoDataDTOCollection $videoDataDTOCollection */

        $this->omitQueues = $omitQueues;
        if(null !== $providerName) {
            $this->importForSpecifiedProvider($providerName);
        }else{
            $this->importForAllKnownProviders();
        }

    }

    private function importForAllKnownProviders()
    {
        foreach(GetImportMethodFromProviderNameFactory::AVAILABLE_PROVIDERS as $provider)
        {
            $this->importForSpecifiedProvider($provider);
        }
    }

    private function importForSpecifiedProvider(string $providerName)
    {
        /** @var ImportServiceInterface $method */
        $method = $this->getImportMethodFromProviderNameFactory->get($providerName);

        /** @var VideoDataDTOCollection $videoDataDTOCollection */
        $videoDataDTOCollection = $method->import();

        /** @var Message $message */
        foreach ($videoDataDTOCollection->asArray() as $dto) {
            /** @var  VideoDataDTO $dto */
            $message = Message::create(
                json_encode(
                    [
                        "labels" => $dto->getLabels(),
                        "name" => $dto->getName(),
                        "url" => $dto->getUrl()
                    ]
                )
            );
            if(!$this->omitQueues) {
                $this->queueService->send($message);
            }else{
                $this->processVideoService->process(
                    $message->asAMQPMessage()
                );
            }
        }
    }
}