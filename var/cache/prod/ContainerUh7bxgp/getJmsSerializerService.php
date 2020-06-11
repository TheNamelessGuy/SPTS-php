<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\SerializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Serializer.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\MetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\AdvancedMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\MetadataFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\DriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\LazyLoadingDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Cache\\FileCache.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\AbstractCollection.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\CollectionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\MapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\AbstractMap.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\SortableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\phpcollection\\phpcollection\\src\\PhpCollection\\Map.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\EventDispatcher\\EventDispatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\EventDispatcher\\EventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Construction\\ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Construction\\UnserializeObjectConstructor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\ContextFactory\\SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\ContextFactory\\DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';

$a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
$a->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));
$b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\ServiceLocator(['jms_serializer.doctrine_proxy_subscriber' => function () {
    return ${($_ = isset($this->services['jms_serializer.doctrine_proxy_subscriber']) ? $this->services['jms_serializer.doctrine_proxy_subscriber'] : ($this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false))) && false ?: '_'};
}]));
$b->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL]]]);

$this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, ${($_ = isset($this->services['jms_serializer.handler_registry']) ? $this->services['jms_serializer.handler_registry'] : $this->load('getJmsSerializer_HandlerRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : ($this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())) && false ?: '_'}, new \PhpCollection\Map(['json' => ${($_ = isset($this->services['jms_serializer.json_serialization_visitor']) ? $this->services['jms_serializer.json_serialization_visitor'] : $this->load('getJmsSerializer_JsonSerializationVisitorService.php')) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_serialization_visitor']) ? $this->services['jms_serializer.xml_serialization_visitor'] : $this->load('getJmsSerializer_XmlSerializationVisitorService.php')) && false ?: '_'}, 'yml' => ${($_ = isset($this->services['jms_serializer.yaml_serialization_visitor']) ? $this->services['jms_serializer.yaml_serialization_visitor'] : $this->load('getJmsSerializer_YamlSerializationVisitorService.php')) && false ?: '_'}]), new \PhpCollection\Map(['json' => ${($_ = isset($this->services['jms_serializer.json_deserialization_visitor']) ? $this->services['jms_serializer.json_deserialization_visitor'] : $this->load('getJmsSerializer_JsonDeserializationVisitorService.php')) && false ?: '_'}, 'xml' => ${($_ = isset($this->services['jms_serializer.xml_deserialization_visitor']) ? $this->services['jms_serializer.xml_deserialization_visitor'] : $this->load('getJmsSerializer_XmlDeserializationVisitorService.php')) && false ?: '_'}]), $b, NULL, ${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->load('getJmsSerializer_ExpressionEvaluatorService.php')) && false ?: '_'});

$instance->setSerializationContextFactory(${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'});
$instance->setDeserializationContextFactory(${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'});

return $instance;
