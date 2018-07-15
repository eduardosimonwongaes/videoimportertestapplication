<?php

namespace AppBundle\SharedKernel\Infrastructure\Sftp;

use AppBundle\SharedKernel\Domain\Service\SftpServiceInterface;

class SftpFileTransferAdapterService implements SftpServiceInterface
{
    //TODO: still we should not worry to implement the adapter as followed by the instructions
    public function connect()
    {
    }

    public function get($originPath,$destinationPath)
    {
    }

    public function put($destinationPath)
    {
    }

    public function disconnect()
    {
    }
}