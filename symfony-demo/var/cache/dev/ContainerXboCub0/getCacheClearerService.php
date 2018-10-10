<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_clearer' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
    yield 0 => ($this->services['cache.system_clearer'] ?? $this->load(__DIR__.'/getCache_SystemClearerService.php'));
}, 1));
