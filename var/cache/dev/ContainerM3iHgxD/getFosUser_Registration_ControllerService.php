<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.registration.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\RegistrationController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Form\\Factory\\FactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Form\\Factory\\FormFactory.php';

$this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->load('getFosUser_UserManagerService.php')), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

$instance->setContainer($this);

return $instance;
