<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.media.manager.category.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Model\\CategoryManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Model\\CategoryManager.php';

return $this->services['sonata.media.manager.category.default'] = new \Sonata\MediaBundle\Model\CategoryManager(${($_ = isset($this->services['sonata.classification.manager.category']) ? $this->services['sonata.classification.manager.category'] : $this->load('getSonata_Classification_Manager_CategoryService.php')) && false ?: '_'});
