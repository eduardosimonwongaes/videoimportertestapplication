<?php

namespace AppBundle\SharedKernel\Infrastructure\Service\Output;

class OutputService
{
    public static function output($message)
    {
        echo $message."\n";
    }
}