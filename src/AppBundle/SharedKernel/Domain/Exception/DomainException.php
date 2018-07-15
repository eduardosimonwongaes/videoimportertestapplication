<?php
/**
 * Created by PhpStorm.
 * User: edu
 * Date: 28/02/18
 * Time: 20:22
 */

namespace AppBundle\SharedKernel\Domain\Exception;


class DomainException extends \Exception
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}