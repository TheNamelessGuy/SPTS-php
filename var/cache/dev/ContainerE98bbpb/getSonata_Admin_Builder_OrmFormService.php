<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_form' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Builder/FormContractorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/FormContractor.php';

return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
