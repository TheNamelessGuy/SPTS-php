<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.classification.serializer.handler.category' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Handler\\SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Serializer\\SerializerHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Serializer\\BaseSerializerHandler.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\src\\Serializer\\CategorySerializerHandler.php';

return $this->services['sonata.classification.serializer.handler.category'] = new \Sonata\ClassificationBundle\Serializer\CategorySerializerHandler(${($_ = isset($this->services['sonata.classification.manager.category']) ? $this->services['sonata.classification.manager.category'] : $this->load('getSonata_Classification_Manager_CategoryService.php')) && false ?: '_'});
