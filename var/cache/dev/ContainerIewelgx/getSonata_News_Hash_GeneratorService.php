<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.news.hash.generator' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Util/HashGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Util/HashGenerator.php';

return $this->services['sonata.news.hash.generator'] = new \Sonata\NewsBundle\Util\HashGenerator('secureToken');
