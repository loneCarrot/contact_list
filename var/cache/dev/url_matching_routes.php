<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ContactListController::index'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\ContactListController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/update/([^/]++)(*:23)'
                .'|/delete/([^/]++)(*:46)'
                .'|/email_check/([^/]++)(*:74)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:109)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'update', '_controller' => 'App\\Controller\\ContactListController::update'], ['id'], null, null, false, true, null]],
        46 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ContactListController::delete'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'email_check', '_controller' => 'App\\Controller\\ContactListController::emailCheck'], ['input_val'], null, null, false, true, null]],
        109 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
