<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.form.renderer' shared service.

@trigger_error('The "templating.form.renderer" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

return new \Symfony\Component\Form\FormRenderer($this->load('getTemplating_Form_EngineService.php'), ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));
