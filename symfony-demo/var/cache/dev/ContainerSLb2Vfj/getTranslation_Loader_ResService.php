<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.loader.res' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/translation/Loader/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
