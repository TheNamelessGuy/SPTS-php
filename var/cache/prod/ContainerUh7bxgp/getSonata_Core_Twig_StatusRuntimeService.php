<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.twig.status_runtime' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Extension\\StatusRuntime.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Twig\\Status\\StatusClassRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Status\\CommentStatusRenderer.php';

$this->services['sonata.core.twig.status_runtime'] = $instance = new \Sonata\Twig\Extension\StatusRuntime();

$instance->addStatusService(${($_ = isset($this->services['sonata.core.flashmessage.manager']) ? $this->services['sonata.core.flashmessage.manager'] : $this->load('getSonata_Core_Flashmessage_ManagerService.php')) && false ?: '_'});
$instance->addStatusService(${($_ = isset($this->services['sonata.news.status.comment']) ? $this->services['sonata.news.status.comment'] : ($this->services['sonata.news.status.comment'] = new \Sonata\NewsBundle\Status\CommentStatusRenderer())) && false ?: '_'});

return $instance;
