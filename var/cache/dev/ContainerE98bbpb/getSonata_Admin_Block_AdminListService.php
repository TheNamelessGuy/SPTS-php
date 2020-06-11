<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.block.admin_list' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Block/AdminListBlockService.php';

return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'});
