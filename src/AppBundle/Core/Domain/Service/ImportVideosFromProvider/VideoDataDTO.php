<?php


namespace AppBundle\Core\Domain\Service\ImportVideosFromProvider;

class VideoDataDTO
{
    /**
     * @var string
     */
    private $labels;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    public function __construct($name, $url, $labels = null)
    {
        $this->labels = $labels;
        $this->name = $name;
        $this->url = $url;
    }

    public function getLabels(): ?string
    {
        return $this->labels;
    }

    /**
     * @return null|string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }


}