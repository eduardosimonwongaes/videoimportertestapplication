<?php
/**
 * Created by PhpStorm.
 * User: edu
 * Date: 28/02/18
 * Time: 20:04
 */

namespace AppBundle\SharedKernel\Application\Service;


use AppBundle\SharedKernel\Infrastructure\UuidProvider\UuidProvider;

class GenerateNewUuidUseCase
{

    /**
     * @var UuidProvider
     */
    private $uuidProvider;

    public function __construct(UuidProvider $uuidProvider)
    {
        $this->uuidProvider = $uuidProvider;
    }

    public function generate()
    {
        return $this->uuidProvider->provide();
    }

}