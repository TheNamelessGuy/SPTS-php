<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.easy_extends.generator.orm' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle/src/Generator/GeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle/src/Generator/OrmGenerator.php';

return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
