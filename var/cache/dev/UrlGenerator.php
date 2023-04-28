<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/']], [], []],
    'Dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::Dashboard'], [], [['text', '/Dashboard']], [], []],
    'ForgetPassword' => [[], ['_controller' => 'App\\Controller\\ForgetPasswordController::ForgetPassword'], [], [['text', '/ForgetPassword']], [], []],
    'HomePage' => [[], ['_controller' => 'App\\Controller\\HomePageController::HomePage'], [], [['text', '/HomePage']], [], []],
    'createStock' => [[], ['_controller' => 'App\\Controller\\MachineFormController::create'], [], [['text', '/Stock/create']], [], []],
    'Permission' => [[], ['_controller' => 'App\\Controller\\PermissionController::Permission'], [], [['text', '/Permission']], [], []],
    'PermissionUpdate' => [['id'], ['_controller' => 'App\\Controller\\PermissionController::PermissionUpdate'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Permission']], [], []],
    'PermissionRemove' => [['id'], ['_controller' => 'App\\Controller\\PermissionController::PermissionDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Permission/Remove']], [], []],
    'Profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::ForgetPassword'], [], [['text', '/Profile']], [], []],
    'Role' => [[], ['_controller' => 'App\\Controller\\RoleController::Role'], [], [['text', '/Role']], [], []],
    'redirect_after_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], [], [['text', '/redirect-after-login']], [], []],
    'Stock' => [[], ['_controller' => 'App\\Controller\\StockController::Stock'], [], [['text', '/Stock']], [], []],
    'UserProfile' => [[], ['_controller' => 'App\\Controller\\UserProfileController::UserProfile'], [], [['text', '/UserProfile']], [], []],
    'Users' => [[], ['_controller' => 'App\\Controller\\UsersController::Users'], [], [['text', '/Users']], [], []],
    'stockView' => [[], ['_controller' => 'App\\Controller\\stockViewController::stockView'], [], [['text', '/stockView']], [], []],
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
