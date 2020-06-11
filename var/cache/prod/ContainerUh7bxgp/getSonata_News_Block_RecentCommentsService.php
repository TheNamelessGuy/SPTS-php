<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.news.block.recent_comments' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\src\\Block\\RecentCommentsBlockService.php';

return $this->services['sonata.news.block.recent_comments'] = new \Sonata\NewsBundle\Block\RecentCommentsBlockService('sonata.news.block.recent_comments', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.news.manager.comment']) ? $this->services['sonata.news.manager.comment'] : $this->load('getSonata_News_Manager_CommentService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
