<?php

namespace AppBundle\SharedKernel\Infrastructure\Queue\Service;

use AppBundle\SharedKernel\Domain\Service\QueueServiceInterface;
use AppBundle\SharedKernel\Domain\ValueObject\Message;
use AppBundle\SharedKernel\Infrastructure\Service\Output\OutputService;
use PhpAmqpLib\Channel\AbstractChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMqQueueAdapterService implements QueueServiceInterface
{
    /**
     * @var AMQPStreamConnection
     */
    private $connection;

    /**
     * @var AbstractChannel
     */
    private $channel;

    const RABBITMQ_HOST = 'localhost';
    const RABBITMQ_PORT = 5672;
    const RABBITMQ_USER = 'guest';
    const RABBITMQ_PASSWORD = 'guest';

    public function __construct()
    {
        $this->connect();
    }

    public function send(Message $message)
    {
        $ampqMessage = new AMQPMessage(
            $message->getBody()
        );
        OutputService::output("Putting message".json_encode($message->getBody())." on ".self::VIDEOIMPORTER_QUEUE_NAME);
        //$this->channel->queue_declare(self::VIDEOIMPORTER_QUEUE_NAME, false, false, false, false);
        //$this->channel->basic_publish($message);
    }

    public function consume(string $queueName, \Closure $closure)
    {
        OutputService::output("Consuming messages from ".self::VIDEOIMPORTER_QUEUE_NAME);
        //$this->channel->queue_declare(self::VIDEOIMPORTER_QUEUE_NAME, false, false, false, false);
        //$this->channel->basic_consume(self::VIDEOIMPORTER_QUEUE_NAME, '', false, true, false, false, $closure);

    }

    private function connect()
    {
        /*$this->connection = new AMQPStreamConnection(
            self::RABBITMQ_HOST,
            self::RABBITMQ_PORT,
            self::RABBITMQ_USER,
            self::RABBITMQ_PASSWORD
        );

        $this->channel = $this->connection->channel();*/
    }
}