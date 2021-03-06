<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.block.feature_media' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Block/MediaBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Block/FeatureMediaBlockService.php';

return $this->services['sonata.media.block.feature_media'] = new \Sonata\MediaBundle\Block\FeatureMediaBlockService('sonata.media.block.feature_media', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, $this, ${($_ = isset($this->services['sonata.media.manager.media']) ? $this->services['sonata.media.manager.media'] : $this->getSonata_Media_Manager_MediaService()) && false ?: '_'});
