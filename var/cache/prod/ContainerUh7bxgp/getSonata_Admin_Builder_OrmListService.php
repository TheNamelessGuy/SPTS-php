<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_list' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\BuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\ListBuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Builder\\ListBuilder.php';

return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder(${($_ = isset($this->services['sonata.admin.guesser.orm_list_chain']) ? $this->services['sonata.admin.guesser.orm_list_chain'] : $this->load('getSonata_Admin_Guesser_OrmListChainService.php')) && false ?: '_'}, ['array' => '@SonataAdmin/CRUD/list_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig', 'date' => '@SonataIntl/CRUD/list_date.html.twig', 'time' => '@SonataAdmin/CRUD/list_time.html.twig', 'datetime' => '@SonataIntl/CRUD/list_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/list_string.html.twig', 'textarea' => '@SonataAdmin/CRUD/list_string.html.twig', 'email' => '@SonataAdmin/CRUD/list_email.html.twig', 'trans' => '@SonataAdmin/CRUD/list_trans.html.twig', 'string' => '@SonataAdmin/CRUD/list_string.html.twig', 'smallint' => '@SonataIntl/CRUD/list_decimal.html.twig', 'bigint' => '@SonataIntl/CRUD/list_decimal.html.twig', 'integer' => '@SonataIntl/CRUD/list_decimal.html.twig', 'decimal' => '@SonataIntl/CRUD/list_decimal.html.twig', 'identifier' => '@SonataAdmin/CRUD/list_string.html.twig', 'currency' => '@SonataIntl/CRUD/list_currency.html.twig', 'percent' => '@SonataIntl/CRUD/list_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/list_choice.html.twig', 'url' => '@SonataAdmin/CRUD/list_url.html.twig', 'html' => '@SonataAdmin/CRUD/list_html.html.twig']);
