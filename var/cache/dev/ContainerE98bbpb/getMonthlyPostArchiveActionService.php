<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\NewsBundle\Action\MonthlyPostArchiveAction' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Action/AbstractPostArchiveAction.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Action/MonthlyPostArchiveAction.php';

$this->services['Sonata\\NewsBundle\\Action\\MonthlyPostArchiveAction'] = $instance = new \Sonata\NewsBundle\Action\MonthlyPostArchiveAction(${($_ = isset($this->services['sonata.news.blog']) ? $this->services['sonata.news.blog'] : $this->getSonata_News_BlogService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.news.manager.post']) ? $this->services['sonata.news.manager.post'] : $this->load('getSonata_News_Manager_PostService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.intl.templating.helper.datetime']) ? $this->services['sonata.intl.templating.helper.datetime'] : $this->getSonata_Intl_Templating_Helper_DatetimeService()) && false ?: '_'});

$instance->setSeoPage(NULL);
$instance->setContainer($this);

return $instance;
