<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.label.strategy.bc' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/BCLabelTranslatorStrategy.php';

return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
