<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.config_dump_reference' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

$this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

$instance->setName('config:dump-reference');

return $instance;
