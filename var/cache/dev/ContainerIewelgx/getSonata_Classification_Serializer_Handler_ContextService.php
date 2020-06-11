<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.classification.serializer.handler.context' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Serializer/SerializerHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Serializer/BaseSerializerHandler.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/classification-bundle/src/Serializer/ContextSerializerHandler.php';

return $this->services['sonata.classification.serializer.handler.context'] = new \Sonata\ClassificationBundle\Serializer\ContextSerializerHandler(${($_ = isset($this->services['sonata.classification.manager.context']) ? $this->services['sonata.classification.manager.context'] : $this->load('getSonata_Classification_Manager_ContextService.php')) && false ?: '_'});
