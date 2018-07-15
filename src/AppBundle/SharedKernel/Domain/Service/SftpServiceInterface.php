<?php

namespace AppBundle\SharedKernel\Domain\Service;

interface SftpServiceInterface
{
    public function connect();

    public function get($originPath,$destinationPath);

    public function disconnect();
}