<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader.qt' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/translation/Loader/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/translation/Loader/QtFileLoader.php';

return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
