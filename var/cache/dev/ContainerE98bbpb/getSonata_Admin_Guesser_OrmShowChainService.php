<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.guesser.orm_show_chain' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/TypeGuesser.php';

return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => ${($_ = isset($this->services['sonata.admin.guesser.orm_show']) ? $this->services['sonata.admin.guesser.orm_show'] : ($this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser())) && false ?: '_'}]);
