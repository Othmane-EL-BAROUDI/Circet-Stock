<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/']], [], []],
    'HomePage' => [[], ['_controller' => 'App\\Controller\\BaseController::HomePage'], [], [['text', '/HomePage']], [], []],
    'Dashboard' => [[], ['_controller' => 'App\\Controller\\BaseController::Dashboard'], [], [['text', '/Dashboard']], [], []],
    'ForgetPassword' => [[], ['_controller' => 'App\\Controller\\BaseController::ForgetPassword'], [], [['text', '/ForgetPassword']], [], []],
    'Historique' => [[], ['_controller' => 'App\\Controller\\BaseController::Historique'], [], [['text', '/Historique']], [], []],
    'Role' => [[], ['_controller' => 'App\\Controller\\BaseController::Role'], [], [['text', '/Role']], [], []],
    'Permission' => [[], ['_controller' => 'App\\Controller\\BaseController::Permission'], [], [['text', '/Permission']], [], []],
    'Users' => [[], ['_controller' => 'App\\Controller\\BaseController::Users'], [], [['text', '/Users']], [], []],
    'Stock' => [[], ['_controller' => 'App\\Controller\\BaseController::Stock'], [], [['text', '/Stock']], [], []],
    'redirect_after_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], [], [['text', '/redirect-after-login']], [], []],
    'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
    'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
    'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
    'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
    'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
    'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
    'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
    'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/register/confirm']], [], []],
    'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
    'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
    'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
    'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
    'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
    'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
];
