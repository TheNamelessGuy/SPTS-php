<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.formatter.ckeditor.extension' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdminExtension.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle\\src\\Admin\\CkeditorAdminExtension.php';

return $this->services['sonata.formatter.ckeditor.extension'] = new \Sonata\FormatterBundle\Admin\CkeditorAdminExtension();
