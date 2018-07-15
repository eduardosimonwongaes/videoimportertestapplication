<?php

namespace AppBundle\Command;

use AppBundle\Core\Application\Services\ConsumeFromQueue\ConsumeFromQueueRequest;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Consumer extends ContainerAwareCommand
{
    public function configure()
    {
        $this -> setName('videoimporter:consumer')
            -> setDescription('Consumes the message from the queue and process them.')
            -> setHelp('check description');

    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>CONSUMER START</info>");
        $this->getContainer()->get('videoconsumer.core.application.service.consume_from_queue.consume_from_queue_use_case')
            ->execute(
                new ConsumeFromQueueRequest()
            );
    }
}