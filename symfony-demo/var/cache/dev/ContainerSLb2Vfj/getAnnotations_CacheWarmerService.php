<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.cache_warmer' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!AbstractController$|Controller$))#');
