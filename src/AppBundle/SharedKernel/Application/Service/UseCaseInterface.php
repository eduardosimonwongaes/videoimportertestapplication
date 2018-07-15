<?php

namespace AppBundle\SharedKernel\Application\Service;

interface UseCaseInterface
{
    public function execute(RequestInterface $request);
}