<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.handler_registry' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Handler\\HandlerRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Handler\\HandlerRegistry.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Handler\\LazyHandlerRegistry.php';

return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\ServiceLocator(['jms_serializer.array_collection_handler' => function () {
    return ${($_ = isset($this->services['jms_serializer.array_collection_handler']) ? $this->services['jms_serializer.array_collection_handler'] : ($this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false))) && false ?: '_'};
}, 'jms_serializer.constraint_violation_handler' => function () {
    return ${($_ = isset($this->services['jms_serializer.constraint_violation_handler']) ? $this->services['jms_serializer.constraint_violation_handler'] : ($this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler())) && false ?: '_'};
}, 'jms_serializer.datetime_handler' => function () {
    return ${($_ = isset($this->services['jms_serializer.datetime_handler']) ? $this->services['jms_serializer.datetime_handler'] : ($this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'Europe/Berlin', true))) && false ?: '_'};
}, 'jms_serializer.form_error_handler' => function () {
    return ${($_ = isset($this->services['jms_serializer.form_error_handler']) ? $this->services['jms_serializer.form_error_handler'] : $this->load('getJmsSerializer_FormErrorHandlerService.php')) && false ?: '_'};
}, 'jms_serializer.php_collection_handler' => function () {
    return ${($_ = isset($this->services['jms_serializer.php_collection_handler']) ? $this->services['jms_serializer.php_collection_handler'] : ($this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler())) && false ?: '_'};
}, 'sonata.classification.serializer.handler.category' => function () {
    return ${($_ = isset($this->services['sonata.classification.serializer.handler.category']) ? $this->services['sonata.classification.serializer.handler.category'] : $this->load('getSonata_Classification_Serializer_Handler_CategoryService.php')) && false ?: '_'};
}, 'sonata.classification.serializer.handler.collection' => function () {
    return ${($_ = isset($this->services['sonata.classification.serializer.handler.collection']) ? $this->services['sonata.classification.serializer.handler.collection'] : $this->load('getSonata_Classification_Serializer_Handler_CollectionService.php')) && false ?: '_'};
}, 'sonata.classification.serializer.handler.context' => function () {
    return ${($_ = isset($this->services['sonata.classification.serializer.handler.context']) ? $this->services['sonata.classification.serializer.handler.context'] : $this->load('getSonata_Classification_Serializer_Handler_ContextService.php')) && false ?: '_'};
}, 'sonata.classification.serializer.handler.tag' => function () {
    return ${($_ = isset($this->services['sonata.classification.serializer.handler.tag']) ? $this->services['sonata.classification.serializer.handler.tag'] : $this->load('getSonata_Classification_Serializer_Handler_TagService.php')) && false ?: '_'};
}, 'sonata.media.serializer.handler.gallery' => function () {
    return ${($_ = isset($this->services['sonata.media.serializer.handler.gallery']) ? $this->services['sonata.media.serializer.handler.gallery'] : $this->load('getSonata_Media_Serializer_Handler_GalleryService.php')) && false ?: '_'};
}, 'sonata.media.serializer.handler.media' => function () {
    return ${($_ = isset($this->services['sonata.media.serializer.handler.media']) ? $this->services['sonata.media.serializer.handler.media'] : $this->load('getSonata_Media_Serializer_Handler_MediaService.php')) && false ?: '_'};
}, 'sonata.news.serializer.handler.post' => function () {
    return ${($_ = isset($this->services['sonata.news.serializer.handler.post']) ? $this->services['sonata.news.serializer.handler.post'] : $this->load('getSonata_News_Serializer_Handler_PostService.php')) && false ?: '_'};
}]), [1 => ['sonata_classification_category_id' => ['json' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId']], 'sonata_classification_collection_id' => ['json' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId']], 'sonata_classification_tag_id' => ['json' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId']], 'sonata_classification_context_id' => ['json' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId']], 'sonata_media_media_id' => ['json' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId']], 'sonata_media_gallery_id' => ['json' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'PhpCollection\\Sequence' => ['json' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'], 'xml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'], 'yml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence']], 'PhpCollection\\Map' => ['json' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'], 'xml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'], 'yml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'], 'yml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'], 'yml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'], 'yml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'], 'yml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml']], 'sonata_news_post_id' => ['json' => [0 => 'sonata.news.serializer.handler.post', 1 => 'serializeObjectToId'], 'xml' => [0 => 'sonata.news.serializer.handler.post', 1 => 'serializeObjectToId'], 'yml' => [0 => 'sonata.news.serializer.handler.post', 1 => 'serializeObjectToId']]], 2 => ['sonata_classification_category_id' => ['json' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId']], 'sonata_classification_collection_id' => ['json' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId']], 'sonata_classification_tag_id' => ['json' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId']], 'sonata_classification_context_id' => ['json' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId']], 'sonata_media_media_id' => ['json' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId']], 'sonata_media_gallery_id' => ['json' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'], 'yml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml']], 'ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'PhpCollection\\Sequence' => ['json' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'], 'xml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'], 'yml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence']], 'PhpCollection\\Map' => ['json' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'], 'xml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'], 'yml' => [0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap']], 'sonata_news_post_id' => ['json' => [0 => 'sonata.news.serializer.handler.post', 1 => 'deserializeObjectFromId'], 'xml' => [0 => 'sonata.news.serializer.handler.post', 1 => 'deserializeObjectFromId'], 'yml' => [0 => 'sonata.news.serializer.handler.post', 1 => 'deserializeObjectFromId']]]]);
