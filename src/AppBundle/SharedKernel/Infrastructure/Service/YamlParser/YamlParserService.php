<?php


namespace AppBundle\SharedKernel\Infrastructure\Service\YamlParser;

use AppBundle\SharedKernel\Domain\Service\ParserServiceInterface;
use Symfony\Component\Yaml\Yaml;

class YamlParserService implements ParserServiceInterface
{
    public function parse($filename)
    {
        return Yaml::parse(file_get_contents(getcwd().ParserServiceInterface::FILE_PATH.$filename));
    }
}