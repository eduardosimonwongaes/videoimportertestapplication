<?php

namespace AppBundle\SharedKernel\Infrastructure\Service\JsonParser;

use AppBundle\SharedKernel\Domain\Service\ParserServiceInterface;

class JsonParserService implements ParserServiceInterface
{
    public function parse($filename)
    {
        return json_decode(file_get_contents(getcwd().ParserServiceInterface::FILE_PATH.$filename), true);
    }
}