<?php

namespace Test\AppBundle\Core\Infrastructure\Service\ConsumeAndPersist;

use AppBundle\Core\Infrastructure\Service\ConsumeAndPersist\ConsumeAndPersistService;
use AppBundle\Core\Infrastructure\Service\ProcessVideo\ProcessVideoService;
use AppBundle\SharedKernel\Infrastructure\Queue\Service\RabbitMqQueueAdapterService;
use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class ConsumeAndPersistServiceTest extends TestCase
{
    /**
     * @var RabbitMqQueueAdapterService | \PHPUnit_Framework_MockObject_MockObject
     */
    private $queueServiceMock;

    /**
     * @var ProcessVideoService | \PHPUnit_Framework_MockObject_MockObject
     */
    private $processVideoServiceMock;

    /**
     * @var ConsumeAndPersistService
     */
    private $consumeAndPersistService;

    public function setUp()
    {
        $this->queueServiceMock = $this->getMockBuilder(RabbitMqQueueAdapterService::class)
            ->disableOriginalConstructor()->getMock();

        $this->processVideoServiceMock = $this->getMockBuilder(ProcessVideoService::class)
            ->disableOriginalConstructor()->getMock();

        $this->consumeAndPersistService = new ConsumeAndPersistService(
            $this->queueServiceMock,
            $this->processVideoServiceMock
        );
    }

    public function testHappyPath()
    {
        $fakeAMQPMessage = new AMQPMessage(
            "fakebody"
        );
        $this->queueServiceMock->expects($this->once())->method("consume")
        ->willReturn($fakeAMQPMessage);
        $this->processVideoServiceMock->expects($this->any())->method("process")
        ->with(Argument::type(AMQPMessage::class));
        $this->consumeAndPersistService->consumeAndPersist();
    }
}
