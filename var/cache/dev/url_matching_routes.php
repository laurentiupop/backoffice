<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/lobby' => [[['_route' => 'lobby', '_controller' => 'App\\Controller\\BankRouletteController::indexAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'], null, null, null, false, false, null]],
        '/fastregistration' => [[['_route' => 'fast_registration', '_controller' => 'App\\Controller\\UsersController::fastregistrationAction'], null, null, null, false, false, null]],
        '/usersearch' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\UsersController::searchAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/lng/([^/]++)(*:55)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        55 => [
            [['_route' => 'lang', '_controller' => 'App\\Controller\\DefaultController::changeLangAction'], ['locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
