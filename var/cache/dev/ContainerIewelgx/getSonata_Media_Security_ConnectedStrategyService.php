<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.security.connected_strategy' shared service.

return $this->services['sonata.media.security.connected_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, [0 => 'IS_AUTHENTICATED_FULLY', 1 => 'IS_AUTHENTICATED_REMEMBERED']);
