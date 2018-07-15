<?php

namespace AppBundle\Core\Domain\Service\ImportVideosFromProvider;

use AppBundle\SharedKernel\Domain\Assertion\DomainAssertion;
use AppBundle\SharedKernel\Domain\ValueObject\CollectionInterface;

class VideoDataDTOCollection implements CollectionInterface
{

    private $videoDataDTO;

    public static function create()
    {
        return new self();
    }

    private function __construct()
    {
        $this->videoDataDTO = [];
    }

    public function add($element)
    {
        DomainAssertion::isInstanceOf($element,VideoDataDTO::class);
        $this->videoDataDTO[] =$element;
    }

    public function asArray()
    {
        return $this->videoDataDTO;
    }
}