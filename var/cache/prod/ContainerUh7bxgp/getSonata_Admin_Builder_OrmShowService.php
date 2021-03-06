<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_show' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\BuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Builder\\ShowBuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src\\Builder\\ShowBuilder.php';

return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder(${($_ = isset($this->services['sonata.admin.guesser.orm_show_chain']) ? $this->services['sonata.admin.guesser.orm_show_chain'] : $this->load('getSonata_Admin_Guesser_OrmShowChainService.php')) && false ?: '_'}, ['array' => '@SonataAdmin/CRUD/show_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig', 'date' => '@SonataIntl/CRUD/show_date.html.twig', 'time' => '@SonataAdmin/CRUD/show_time.html.twig', 'datetime' => '@SonataIntl/CRUD/show_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'email' => '@SonataAdmin/CRUD/show_email.html.twig', 'trans' => '@SonataAdmin/CRUD/show_trans.html.twig', 'string' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'smallint' => '@SonataIntl/CRUD/show_decimal.html.twig', 'bigint' => '@SonataIntl/CRUD/show_decimal.html.twig', 'integer' => '@SonataIntl/CRUD/show_decimal.html.twig', 'decimal' => '@SonataIntl/CRUD/show_decimal.html.twig', 'currency' => '@SonataIntl/CRUD/show_currency.html.twig', 'percent' => '@SonataIntl/CRUD/show_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/show_choice.html.twig', 'url' => '@SonataAdmin/CRUD/show_url.html.twig', 'html' => '@SonataAdmin/CRUD/show_html.html.twig']);
