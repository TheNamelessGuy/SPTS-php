<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.label.strategy.form_component' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Translator/FormLabelTranslatorStrategy.php';

return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
