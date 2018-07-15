<?php

namespace AppBundle\Core\Domain\Service\ProcessVideo;

use PhpAmqpLib\Message\AMQPMessage;

interface ProcessVideoInterface
{
    public function process(AMQPMessage $message);
}