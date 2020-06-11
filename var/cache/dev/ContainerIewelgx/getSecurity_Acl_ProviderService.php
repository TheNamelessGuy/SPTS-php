<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.acl.provider' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/AclProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Dbal/AclProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/MutableAclProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/PropertyChangedListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Dbal/MutableAclProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/PermissionGrantingStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Domain/PermissionGrantingStrategy.php';

return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load('getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), ['class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'], NULL);
