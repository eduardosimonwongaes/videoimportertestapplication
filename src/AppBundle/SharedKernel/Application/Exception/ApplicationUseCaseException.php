<?php
/**
 * Created by PhpStorm.
 * User: edu
 * Date: 28/02/18
 * Time: 21:07
 */

namespace SharedKernel\Application\Exception;


class ApplicationUseCaseException extends \Exception
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}