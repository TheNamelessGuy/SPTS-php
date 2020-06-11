<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\NewsBundle\Action\CreateCommentFormAction' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Action/CreateCommentFormAction.php';

$this->services['Sonata\\NewsBundle\\Action\\CreateCommentFormAction'] = $instance = new \Sonata\NewsBundle\Action\CreateCommentFormAction(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.news.manager.post']) ? $this->services['sonata.news.manager.post'] : $this->load('getSonata_News_Manager_PostService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.news.manager.comment']) ? $this->services['sonata.news.manager.comment'] : $this->load('getSonata_News_Manager_CommentService.php')) && false ?: '_'}, ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
