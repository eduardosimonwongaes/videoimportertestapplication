<?php

namespace AppBundle\SharedKernel\Domain\Service;

interface ParserServiceInterface
{
    public const FILE_PATH = "/feed_exports/";

    public function parse($filename);
}