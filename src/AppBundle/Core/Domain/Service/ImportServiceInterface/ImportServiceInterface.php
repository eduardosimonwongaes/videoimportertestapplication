<?php

namespace AppBundle\Core\Domain\Service\ImportServiceInterface;

use AppBundle\Core\Domain\Service\ImportVideosFromProvider\VideoDataDTOCollection;

interface ImportServiceInterface
{
    public function import(): VideoDataDTOCollection;
}