<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.email' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
require_once $this->targetDirs[3].'/vendor/symfony/validator/Constraints/EmailValidator.php';

return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
