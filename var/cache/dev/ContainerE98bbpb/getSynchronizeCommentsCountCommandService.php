<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\NewsBundle\Command\SynchronizeCommentsCountCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/news-bundle/src/Command/SynchronizeCommentsCountCommand.php';

return $this->services['Sonata\\NewsBundle\\Command\\SynchronizeCommentsCountCommand'] = new \Sonata\NewsBundle\Command\SynchronizeCommentsCountCommand();
