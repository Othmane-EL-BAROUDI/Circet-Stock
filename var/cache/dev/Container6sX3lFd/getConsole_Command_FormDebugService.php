<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'], [0 => 'App\\Form\\MachineFormType', 1 => 'App\\Form\\PermissionFormType', 2 => 'App\\Form\\UserFormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 6 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 7 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 8 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 9 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 10 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 11 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

$instance->setName('debug:form');

return $instance;
