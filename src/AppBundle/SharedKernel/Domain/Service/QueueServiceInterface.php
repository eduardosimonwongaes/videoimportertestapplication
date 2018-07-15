<?php

namespace AppBundle\SharedKernel\Domain\Service;

use AppBundle\SharedKernel\Domain\ValueObject\Message;

interface QueueServiceInterface
{
    const VIDEOIMPORTER_QUEUE_NAME = 'videoimporter';

    public function send(Message $message);

    public function consume(string $queueName, \Closure $consumeMethod);
}