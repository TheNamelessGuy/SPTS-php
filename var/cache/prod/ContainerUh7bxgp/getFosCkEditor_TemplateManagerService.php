<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.template_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Model\\TemplateManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Model\\TemplateManager.php';

return $this->services['fos_ck_editor.template_manager'] = new \FOS\CKEditorBundle\Model\TemplateManager();
