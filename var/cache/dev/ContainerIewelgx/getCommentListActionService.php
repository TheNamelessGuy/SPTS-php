<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\NewsBundle\Action\CommentListAction' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Action/CommentListAction.php';

$this->services['Sonata\\NewsBundle\\Action\\CommentListAction'] = $instance = new \Sonata\NewsBundle\Action\CommentListAction(${($_ = isset($this->services['sonata.news.manager.comment']) ? $this->services['sonata.news.manager.comment'] : $this->load('getSonata_News_Manager_CommentService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
