<?php


namespace AppBundle\Core\Infrastructure\DataTransformer;


use AppBundle\SharedKernel\Domain\ValueObject\Message;
use PhpAmqpLib\Message\AMQPMessage;

class MessageDataTransformer
{
    public function fromAMQPMessage(AMQPMessage $message)
    {
        return Message::create($message->getBody());
    }
}