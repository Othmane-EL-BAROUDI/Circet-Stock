<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/Dashboard' => [[['_route' => 'Dashboard', '_controller' => 'App\\Controller\\DashboardController::Dashboard'], null, null, null, false, false, null]],
        '/HomePage' => [[['_route' => 'HomePage', '_controller' => 'App\\Controller\\HomePageController::HomePage'], null, null, null, false, false, null]],
        '/Marque' => [[['_route' => 'Marque', '_controller' => 'App\\Controller\\MarqueController::Marque'], null, null, null, false, false, null]],
        '/Model' => [[['_route' => 'Model', '_controller' => 'App\\Controller\\ModelController::Model'], null, null, null, false, false, null]],
        '/Permission' => [[['_route' => 'Permission', '_controller' => 'App\\Controller\\PermissionController::Permission'], null, null, null, false, false, null]],
        '/Profile' => [[['_route' => 'Profile', '_controller' => 'App\\Controller\\ProfileController::ForgetPassword'], null, null, null, false, false, null]],
        '/restitution' => [[['_route' => 'restitution', '_controller' => 'App\\Controller\\RestitutionController::index'], null, null, null, false, false, null]],
        '/Role' => [[['_route' => 'Role', '_controller' => 'App\\Controller\\RoleController::Role'], null, null, null, false, false, null]],
        '/redirect-after-login' => [[['_route' => 'redirect_after_login', '_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], null, null, null, false, false, null]],
        '/Stock' => [[['_route' => 'Stock', '_controller' => 'App\\Controller\\StockController::Stock'], null, null, null, false, false, null]],
        '/UserProfile' => [[['_route' => 'UserProfile', '_controller' => 'App\\Controller\\UserProfileController::UserProfile'], null, null, null, false, false, null]],
        '/Users' => [[['_route' => 'Users', '_controller' => 'App\\Controller\\UsersController::Users'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/Affec(?'
                    .'|ation/(?'
                        .'|Delete/([^/]++)(*:75)'
                        .'|Accept/([^/]++)(*:97)'
                    .')'
                    .'|tation/([^/]++)(*:120)'
                .')'
                .'|/re(?'
                    .'|s(?'
                        .'|titution/(?'
                            .'|Delete/([^/]++)(*:166)'
                            .'|Accept/([^/]++)(*:189)'
                        .')'
                        .'|etting/reset/([^/]++)(*:219)'
                    .')'
                    .'|gister/confirm/([^/]++)(*:251)'
                .')'
                .'|/materialView/([^/]++)(*:282)'
                .'|/De(?'
                    .'|leteNotification/([^/]++)(*:321)'
                    .'|mandeRestitution/([^/]++)(*:354)'
                .')'
                .'|/M(?'
                    .'|arque/(?'
                        .'|([^/]++)(*:385)'
                        .'|Remove/([^/]++)(*:408)'
                    .')'
                    .'|odel/(?'
                        .'|([^/]++)(*:433)'
                        .'|Remove/([^/]++)(*:456)'
                    .')'
                .')'
                .'|/Permission/(?'
                    .'|([^/]++)(*:489)'
                    .'|Remove/([^/]++)(*:512)'
                .')'
                .'|/Role/(?'
                    .'|Edit/([^/]++)(*:543)'
                    .'|Remove/([^/]++)(*:566)'
                .')'
                .'|/stockView/([^/]++)(*:594)'
                .'|/Stock/(?'
                    .'|Remove/([^/]++)(*:627)'
                    .'|Edit/([^/]++)(*:648)'
                .')'
                .'|/User/(?'
                    .'|([^/]++)(*:674)'
                    .'|Remove/([^/]++)(*:697)'
                    .'|Edit/([^/]++)(*:718)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        75 => [[['_route' => 'AffectationRemove', '_controller' => 'App\\Controller\\DashboardController::AffectationRemove'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'AffectationAccept', '_controller' => 'App\\Controller\\DashboardController::AffectationAccept'], ['id'], null, null, false, true, null]],
        120 => [[['_route' => 'Affectation', '_controller' => 'App\\Controller\\HomePageController::Affectation'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'resitutionRemove', '_controller' => 'App\\Controller\\DashboardController::resitutionRemove'], ['id'], null, null, false, true, null]],
        189 => [[['_route' => 'restitutionAccept', '_controller' => 'App\\Controller\\DashboardController::restitutionAccept'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        251 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'materialView', '_controller' => 'App\\Controller\\HomePageController::MaterialView'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'DeleteNotification', '_controller' => 'App\\Controller\\HomePageController::DeleteNotification'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'DemandeRestitution', '_controller' => 'App\\Controller\\RestitutionController::demande'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'MarqueUpdate', '_controller' => 'App\\Controller\\MarqueController::MarqueUpdate'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'MarquelRemove', '_controller' => 'App\\Controller\\MarqueController::MarqueDelete'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'ModelUpdate', '_controller' => 'App\\Controller\\ModelController::ModelUpdate'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'ModelRemove', '_controller' => 'App\\Controller\\ModelController::ModelDelete'], ['id'], null, null, false, true, null]],
        489 => [[['_route' => 'PermissionUpdate', '_controller' => 'App\\Controller\\PermissionController::PermissionUpdate'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'PermissionRemove', '_controller' => 'App\\Controller\\PermissionController::PermissionDelete'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'RoleUpdate', '_controller' => 'App\\Controller\\RoleController::RoleUpdate'], ['id'], null, null, false, true, null]],
        566 => [[['_route' => 'RoleRemove', '_controller' => 'App\\Controller\\RoleController::RoleDelete'], ['id'], null, null, false, true, null]],
        594 => [[['_route' => 'stockView', '_controller' => 'App\\Controller\\StockController::stockView'], ['id'], null, null, false, true, null]],
        627 => [[['_route' => 'StockRemove', '_controller' => 'App\\Controller\\StockController::PermissionDelete'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'StockUpdate', '_controller' => 'App\\Controller\\StockController::StockUpdate'], ['id'], null, null, false, true, null]],
        674 => [[['_route' => 'UserView', '_controller' => 'App\\Controller\\UsersController::UserView'], ['id'], null, null, false, true, null]],
        697 => [[['_route' => 'UserRemove', '_controller' => 'App\\Controller\\UsersController::UserDelete'], ['id'], null, null, false, true, null]],
        718 => [
            [['_route' => 'UserUpdate', '_controller' => 'App\\Controller\\UsersController::UserUpdate'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
