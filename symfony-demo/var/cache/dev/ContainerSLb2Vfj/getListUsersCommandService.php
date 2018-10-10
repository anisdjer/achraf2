<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Command\ListUsersCommand' shared autowired service.

require_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
require_once $this->targetDirs[3].'/src/Command/ListUsersCommand.php';

$this->privates['App\Command\ListUsersCommand'] = $instance = new \App\Command\ListUsersCommand(($this->services['swiftmailer.mailer.default'] ?? $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php')), 'anonymous@example.com', ($this->privates['App\Repository\UserRepository'] ?? $this->load(__DIR__.'/getUserRepositoryService.php')));

$instance->setName('app:list-users');

return $instance;
