<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access.authenticated_voter' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/AuthenticatedVoter.php';

return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')));
