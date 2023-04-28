<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Validation.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\Util\\LegacyTranslatorProxy.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ObjectInitializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Validator\\Initializer.php';

$this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
    'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
    'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
    'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
    'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
    'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
], [
    'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
    'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
    'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
    'doctrine.orm.validator.unique' => '?',
    'security.validator.user_password' => '?',
    'validator.expression' => '?',
])));
$instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
$instance->setTranslationDomain('validators');
$instance->addXmlMappings([0 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/config/validation.xml')]);
$instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
$instance->addMethodMapping('loadValidatorMetadata');
$instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->load('getFosUser_Util_CanonicalFieldsUpdaterService.php')))]);
$instance->addXmlMapping(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\DependencyInjection\\Compiler/../../Resources/config/storage-validation/orm.xml'));

return $instance;
