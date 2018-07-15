<?php


namespace AppBundle\Core\Application\Service\ImportVideosFromProvider;

use AppBundle\SharedKernel\Application\Service\RequestInterface;

class ImportVideosFromProviderRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $providerName;

    /**
     * @var bool
     */
    private $omitQueues;

    public function __construct(
        $providerName,
        $omitQueues
    ) {
        $this->providerName = $providerName;
        $this->omitQueues = $omitQueues;
    }

    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    public function getOmitQueues(): bool
    {
        return $this->omitQueues;
    }
}