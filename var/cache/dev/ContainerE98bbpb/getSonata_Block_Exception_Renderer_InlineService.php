<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.renderer.inline' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineRenderer.php';

return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, '@SonataBlock/Block/block_exception.html.twig');
