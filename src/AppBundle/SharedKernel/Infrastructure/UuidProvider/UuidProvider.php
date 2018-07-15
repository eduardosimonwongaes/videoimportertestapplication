<?php

namespace AppBundle\SharedKernel\Infrastructure\UuidProvider;


class UuidProvider
{

    const FAKE_UUID = "3fb728b6-e77a-413b-b2b9-8c92efff4f74";

    public function provide()
    {
        return  self::FAKE_UUID;
    }
}