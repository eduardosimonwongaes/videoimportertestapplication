<?php

namespace AppBundle\SharedKernel\Domain\ValueObject;


use Assert\AssertionFailedException;
use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    const FAKE_JSON = "{\"potato\":\"asdasd\"}";
    const FAKE_INVALID_JSON = "{\"potato\",\"asdasd\"}";

    public function testThatPassingProperParametersAMessageWillBeCreated()
    {
        $fakeMessage = Message::create(self::FAKE_JSON);
        $this->assertInstanceOf(Message::class, $fakeMessage);
        $this->assertEquals("asdasd",$fakeMessage->getBody()['potato']);
    }

    public function assertThatPassingAnInvalidJsonWillThrowAnException()
    {
        $this->expectException(AssertionFailedException::class);
        $fakeMessage = Message::create(self::FAKE_INVALID_JSON);
    }

    public function testThatCreatingTheMessageObjectAndRetrievingItAsAnAMQPMessageWillHaveTheProperValueSet()
    {
        $fakeMessage = Message::create(self::FAKE_JSON);
        $amqpMessage=  $fakeMessage->asAMQPMessage();
        $this->assertInstanceOf(
            AMQPMessage::class,
            $amqpMessage
            );
        $this->assertEquals($fakeMessage->getBody(),json_decode($amqpMessage->getBody(),true));
    }
}
