<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'videoconsumer.core.infrastructure.service.process_video.process_video_service' shared service.

return $this->services['videoconsumer.core.infrastructure.service.process_video.process_video_service'] = new \AppBundle\Core\Infrastructure\Service\ProcessVideo\ProcessVideoService(${($_ = isset($this->services['videoconsumer.infrastructure.service.datatransformer.message_datatransformer']) ? $this->services['videoconsumer.infrastructure.service.datatransformer.message_datatransformer'] : $this->services['videoconsumer.infrastructure.service.datatransformer.message_datatransformer'] = new \AppBundle\Core\Infrastructure\DataTransformer\MessageDataTransformer()) && false ?: '_'}, ${($_ = isset($this->services['videoconsumer.core.infrastructure.repository.doctrine_video_repository']) ? $this->services['videoconsumer.core.infrastructure.repository.doctrine_video_repository'] : $this->services['videoconsumer.core.infrastructure.repository.doctrine_video_repository'] = new \AppBundle\Core\Infrastructure\Repository\DoctrineVideoRepository()) && false ?: '_'}, ${($_ = isset($this->services['videoconsumer.core.infrastructure.service.build_video_aggregate.build_video_aggregate_service']) ? $this->services['videoconsumer.core.infrastructure.service.build_video_aggregate.build_video_aggregate_service'] : $this->services['videoconsumer.core.infrastructure.service.build_video_aggregate.build_video_aggregate_service'] = new \AppBundle\Core\Infrastructure\Service\BuildVideoAggregate\BuildVideoAggregateService()) && false ?: '_'});
