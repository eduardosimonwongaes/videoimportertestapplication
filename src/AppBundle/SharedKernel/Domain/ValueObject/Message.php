<?php

namespace AppBundle\SharedKernel\Domain\ValueObject;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;
use PhpAmqpLib\Message\AMQPMessage;

class Message
{
    private $body = [];

    public static function create($body)
    : Message{
        DomainAssertion::isJsonString($body);
        return new self($body);
    }

    private function __construct($body)
    {
        $this->body = json_decode($body,true);
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    public function asAMQPMessage()
    {
        return new AMQPMessage(
            json_encode($this->body)
        );
    }
}