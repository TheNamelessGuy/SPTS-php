<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.filter.keep_none' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Filter/KeepNoneFilter.php';

return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
