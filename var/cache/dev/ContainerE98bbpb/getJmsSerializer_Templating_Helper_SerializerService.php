<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.templating.helper.serializer' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/Templating/SerializerHelper.php';

return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'});
