<?php

namespace AppBundle\Core\Domain\Aggregate;

use AppBundle\Core\Domain\ValueObject\LabelCollection;
use AppBundle\Core\Domain\ValueObject\Name;
use AppBundle\Core\Domain\ValueObject\Url;

class Video
{
    /**
     * @var Name
     */
    private $name;

    /**
     * @var LabelCollection
     */
    private $labels;

    /**
     * @var Url
     */
    private $url;

    public static function create(
        LabelCollection $labels,
        Name $name,
        Url $url
    ): Video {
        return new self($labels, $name, $url);
    }

    private function __construct(
        LabelCollection $labels,
        Name $name,
        Url $url
    ) {
        $this->labels = $labels;
        $this->name = $name;
        $this->url = $url;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getLabels(): LabelCollection
    {
        return $this->labels;
    }

    public function getUrl(): Url
    {
        return $this->url;
    }
}