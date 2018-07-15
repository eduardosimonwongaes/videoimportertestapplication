<?php

namespace AppBundle\Core\Infrastructure\DataTransformer;


use AppBundle\SharedKernel\Domain\ValueObject\Message;
use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;

class MessageDataTransformerTest extends TestCase
{
    const FAKEBODY = "{\"test\":\"fakebody\"}";

    public function testThatPassingAValidObjectThereWillBeAProperMessageAsAResponse()
    {
        $origin = new AMQPMessage("" . self::FAKEBODY . "");
        $dataTransformer = new MessageDataTransformer();
        $result = $dataTransformer->fromAMQPMessage($origin);
        $this->assertInstanceOf(Message::class,$result);
    }
}
