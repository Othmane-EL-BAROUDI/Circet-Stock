<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.execute_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';

$this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->load('getDoctrine_Migrations_DependencyFactoryService.php')), 'doctrine:migrations:execute');

$instance->setName('doctrine:migrations:execute');

return $instance;