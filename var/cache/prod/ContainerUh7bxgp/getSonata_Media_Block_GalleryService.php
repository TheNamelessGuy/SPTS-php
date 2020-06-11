<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.block.gallery' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Block\\GalleryBlockService.php';

return $this->services['sonata.media.block.gallery'] = new \Sonata\MediaBundle\Block\GalleryBlockService('sonata.media.block.gallery', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, $this, ${($_ = isset($this->services['sonata.media.manager.gallery']) ? $this->services['sonata.media.manager.gallery'] : $this->load('getSonata_Media_Manager_GalleryService.php')) && false ?: '_'});
