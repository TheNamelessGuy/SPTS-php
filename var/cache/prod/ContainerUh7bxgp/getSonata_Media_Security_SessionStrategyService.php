<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.security.session_strategy' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\src\\Security\\SessionDownloadStrategy.php';

return $this->services['sonata.media.security.session_strategy'] = new \Sonata\MediaBundle\Security\SessionDownloadStrategy(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'}, 1);
