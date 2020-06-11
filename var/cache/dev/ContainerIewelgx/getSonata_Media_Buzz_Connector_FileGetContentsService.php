<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.buzz.connector.file_get_contents' shared service.

include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/AbstractStream.php';
include_once $this->targetDirs[3].'/vendor/kriswallsmith/buzz/lib/Buzz/Client/FileGetContents.php';

$this->services['sonata.media.buzz.connector.file_get_contents'] = $instance = new \Buzz\Client\FileGetContents();

$instance->setIgnoreErrors(true);
$instance->setMaxRedirects(5);
$instance->setTimeout(5);
$instance->setVerifyPeer(true);
$instance->setProxy(NULL);

return $instance;
