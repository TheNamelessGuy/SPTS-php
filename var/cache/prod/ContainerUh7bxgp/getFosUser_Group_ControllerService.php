<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.group.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\GroupController.php';

$this->services['fos_user.group.controller'] = $instance = new \FOS\UserBundle\Controller\GroupController(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.group.form.factory']) ? $this->services['fos_user.group.form.factory'] : $this->load('getFosUser_Group_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.group_manager']) ? $this->services['fos_user.group_manager'] : $this->load('getFosUser_GroupManagerService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
