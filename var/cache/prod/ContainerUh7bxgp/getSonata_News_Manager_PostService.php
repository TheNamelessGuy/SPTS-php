<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.news.manager.post' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Model\\PostManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Entity\\PostManager.php';

return $this->services['sonata.news.manager.post'] = new \Sonata\NewsBundle\Entity\PostManager('Application\\Sonata\\NewsBundle\\Entity\\Post', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
