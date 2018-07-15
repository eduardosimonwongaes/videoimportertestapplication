<?php

namespace AppBundle\Core\Infrastructure\Service\ProcessVideo;

use AppBundle\Core\Domain\Aggregate\Video;
use AppBundle\Core\Domain\Repository\VideoRepositoryInterface;
use AppBundle\Core\Infrastructure\DataTransformer\MessageDataTransformer;
use AppBundle\Core\Infrastructure\Service\BuildVideoAggregate\BuildVideoAggregateService;
use AppBundle\SharedKernel\Domain\ValueObject\Message;
use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;
use Test\AppBundle\Core\Domain\Entity\FakeVideoBuilder;

class ProcessVideoServiceTest extends TestCase
{
    const FAKE_MESSAGE_BODY = "{
        \"labels\": \"".FakeVideoBuilder::FAKE_LABELS."\",
        \"name\": \"".FakeVideoBuilder::FAKE_NAME."\",
        \"url\": \"".FakeVideoBuilder::FAKE_URL."\"
}";
    const FAKE_NAME = "SuperVideo";
    const FAKE_URL = "http://supersource.com/video/tag/4";
    const FAKE_LABEL = "nice,things,to,come";

    /**
     * @var MessageDataTransformer | \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataTransformerServiceMock;

    /**
     * @var VideoRepositoryInterface | \PHPUnit_Framework_MockObject_MockObject
     */
    private $videoRespositoryMock;

    /**
     * @var BuildVideoAggregateService | \PHPUnit_Framework_MockObject_MockObject
     */
    private $buildVideoAggregateServiceMock;

    /**
     * @var ProcessVideoService
     */
    private $processVideoService;

    /**
     * @var AMQPMessage
     */
    private $fakeAMQPMessage;

    /**
     * @var Message
     */
    private $fakeMessage;

    /**
     * @var Video
     */
    private $fakeVideo;


    public function setUp()
    {
        $this->dataTransformerServiceMock = $this->getMockBuilder(MessageDataTransformer::class)
            ->disableOriginalConstructor()->getMock();

        $this->videoRespositoryMock = $this->getMockBuilder(VideoRepositoryInterface::class)
            ->getMock();

        $this->buildVideoAggregateServiceMock = $this->getMockBuilder(BuildVideoAggregateService::class)
            ->disableOriginalConstructor()->getMock();

        $this->processVideoService = new ProcessVideoService(
            $this->dataTransformerServiceMock,
            $this->videoRespositoryMock,
            $this->buildVideoAggregateServiceMock
        );

        $this->fakeMessage = Message::create(self::FAKE_MESSAGE_BODY);
    }

    /**
     * @Given anAMQPMessage
     * @Then CallingTheTransformServiceWeWillHaveANormalMessage
     * @AndThen CallingTheBuildServiceWeWillHaveAnAggregateBuiltProperly
     * @AndThen WeWillHaveTheAggregatePersisted
     * @When ACallToTheServiceIsMade
     */
    public function testNormalPath()
    {
        $this->fakeVideo = FakeVideoBuilder::build();
        $this->givenAnAMQPMessage();
        $this->thenCallingTheTransformServiceWillReturnANormalMessage();
        $this->thenCallingTheBuildServiceWeWillHaveAnAggregateBuiltProperly();
        $this->thenWeWillHaaveTheAggregatePersisted();
        $this->whenWeCallTheService();
    }

    private function givenAnAMQPMessage()
    {
        $this->fakeAMQPMessage = new AMQPMessage("" . self::FAKE_MESSAGE_BODY . "");
    }

    private function thenCallingTheTransformServiceWillReturnANormalMessage()
    {
        $this->dataTransformerServiceMock->expects($this->once())
            ->method("fromAMQPMessage")
            ->with($this->fakeAMQPMessage)
            ->willReturn($this->fakeMessage);
    }

    private function thenCallingTheBuildServiceWeWillHaveAnAggregateBuiltProperly()
    {
        $this->buildVideoAggregateServiceMock->expects($this->once())
            ->method("build")
            ->with(
                FakeVideoBuilder::FAKE_LABELS,
                FakeVideoBuilder::FAKE_NAME,
                FakeVideoBuilder::FAKE_URL
            )->willReturn(
                $this->fakeVideo
            );
    }

    private function thenWeWillHaaveTheAggregatePersisted()
    {
        $this->videoRespositoryMock->expects($this->once())
            ->method("save")
            ->with($this->fakeVideo);
    }

    private function whenWeCallTheService()
    {
        $this->processVideoService->process($this->fakeAMQPMessage);
    }
}
