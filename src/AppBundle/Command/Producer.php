<?php

namespace AppBundle\Command;

use AppBundle\Core\Application\Service\ImportVideosFromProvider\ImportVideosFromProviderRequest;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Producer extends ContainerAwareCommand
{
    public function configure()
    {
        $this -> setName('videoimporter:producer')
            -> setDescription('Imports the videos from various sources')
            -> setHelp('This command allows you to greet a user based on the time of the day...')
            -> addOption('provider',
                'p',
                InputOption::VALUE_OPTIONAL,
                'Allows you to pass the provider for which you want to execute the import. Default is all of them',
                null
            )
            -> addOption(
                'omitqueues',
                'o',
        InputOption::VALUE_OPTIONAL,
        'This will omit the usage of rabbitMQ to process all the videos from all providers async and will "persist" them directly',
                true
            );

    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $provider = null;
        if(null !== $input->getOption('provider')) {
            $provider = $input->getOption('provider');
        }

        if($input->getOption('omitqueues')=="true") {
            $omitQueues = true;
        }else{
            $omitQueues = false;
        }

        $this->getContainer()->get(
            'videoconsumer.core.application.service.import_videos_from_provider.import_videos_from_provider_use_case'
        )->execute(
            new ImportVideosFromProviderRequest(
                $provider,
                $omitQueues
            )
        );
    }
}