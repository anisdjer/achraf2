<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/AbstractCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/VersionCommand.php';
require_once $this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

return $this->services['console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();
