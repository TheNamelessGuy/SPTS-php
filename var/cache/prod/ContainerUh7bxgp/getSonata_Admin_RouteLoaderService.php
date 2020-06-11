<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route_loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\LoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Loader\\Loader.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Route\\AdminPoolLoader.php';

return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, [0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group', 2 => 'sonata.classification.admin.category', 3 => 'sonata.classification.admin.tag', 4 => 'sonata.classification.admin.collection', 5 => 'sonata.classification.admin.context', 6 => 'sonata.media.admin.media', 7 => 'sonata.media.admin.gallery', 8 => 'sonata.media.admin.gallery_has_media', 9 => 'sonata.news.admin.post', 10 => 'sonata.news.admin.comment'], $this);
