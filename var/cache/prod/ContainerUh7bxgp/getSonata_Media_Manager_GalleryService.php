<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.manager.gallery' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Model\\GalleryManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Entity\\GalleryManager.php';

return $this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Entity\GalleryManager('Application\\Sonata\\MediaBundle\\Entity\\Gallery', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
