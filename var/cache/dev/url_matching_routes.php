<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/acceuil/admin' => [[['_route' => 'app_acceuil_admin', '_controller' => 'App\\Controller\\AcceuilAdminController::index'], null, null, null, false, false, null]],
        '/acceuil/client' => [[['_route' => 'app_acceuil_client', '_controller' => 'App\\Controller\\AcceuilClientController::index'], null, null, null, false, false, null]],
        '/acceuil' => [
            [['_route' => 'app_acceuil_index', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null],
            [['_route' => 'acceuil', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::index'], null, null, null, false, false, null],
        ],
        '/' => [
            [['_route' => 'app_acceuil_acceuil', '_controller' => 'App\\Controller\\AcceuilController::acceuil'], null, null, null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuil'], null, null, null, false, false, null],
        ],
        '/accueilclient' => [
            [['_route' => 'app_acceuil_acceuilclient', '_controller' => 'App\\Controller\\AcceuilController::acceuilclient'], null, null, null, false, false, null],
            [['_route' => 'accueilclient', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuilclient'], null, null, null, false, false, null],
        ],
        '/acceuiladmin' => [
            [['_route' => 'app_acceuil_acceuiladmin', '_controller' => 'App\\Controller\\AcceuilController::acceuiladmin'], null, null, null, false, false, null],
            [['_route' => 'acceuiladmin', '_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuiladmin'], null, null, null, false, false, null],
        ],
        '/annonces/all' => [[['_route' => 'app_annonces_all_index', '_controller' => 'App\\Controller\\AnnoncesAllController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/all/new' => [[['_route' => 'app_annonces_all_new', '_controller' => 'App\\Controller\\AnnoncesAllController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces/client' => [[['_route' => 'app_annonces_client_index', '_controller' => 'App\\Controller\\AnnoncesClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonces/client/new' => [[['_route' => 'app_annonces_client_new', '_controller' => 'App\\Controller\\AnnoncesClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonces' => [
            [['_route' => 'app_annonces_index', '_controller' => 'App\\Controller\\AnnoncesController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'annonces', '_controller' => 'App\\Controller\\Annonces\\AnnoncesController::index'], null, null, null, false, false, null],
        ],
        '/annonces/new' => [[['_route' => 'app_annonces_new', '_controller' => 'App\\Controller\\AnnoncesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categories' => [
            [['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'categories', '_controller' => 'App\\Controller\\Categories\\CategoriesController::index'], null, null, null, false, false, null],
        ],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/client' => [[['_route' => 'app_contact_client', '_controller' => 'App\\Controller\\ContactClientController::index'], null, null, null, false, false, null]],
        '/contact' => [
            [['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\Contact\\ContactController::index'], null, null, null, false, false, null],
        ],
        '/contactclient' => [
            [['_route' => 'app_contact_contactclient', '_controller' => 'App\\Controller\\ContactController::contactclient'], null, null, null, false, false, null],
            [['_route' => 'contactclient', '_controller' => 'App\\Controller\\Contact\\ContactController::contact/client'], null, null, null, false, false, null],
        ],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'security_login', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'security_logout'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/annonces/(?'
                    .'|all/([^/]++)(?'
                        .'|(*:197)'
                        .'|/edit(*:210)'
                        .'|(*:218)'
                    .')'
                    .'|client/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:286)'
                        .'|/edit(*:299)'
                        .'|(*:307)'
                    .')'
                    .'|client(?'
                        .'|/new(*:329)'
                        .'|(*:337)'
                    .')'
                    .'|all(*:349)'
                .')'
                .'|/categories/([^/]++)(?'
                    .'|(*:381)'
                    .'|/edit(*:394)'
                    .'|(*:402)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'app_annonces_all_show', '_controller' => 'App\\Controller\\AnnoncesAllController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'app_annonces_all_edit', '_controller' => 'App\\Controller\\AnnoncesAllController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'app_annonces_all_delete', '_controller' => 'App\\Controller\\AnnoncesAllController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_annonces_client_show', '_controller' => 'App\\Controller\\AnnoncesClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_annonces_client_edit', '_controller' => 'App\\Controller\\AnnoncesClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_annonces_client_delete', '_controller' => 'App\\Controller\\AnnoncesClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_annonces_show', '_controller' => 'App\\Controller\\AnnoncesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_annonces_edit', '_controller' => 'App\\Controller\\AnnoncesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'app_annonces_delete', '_controller' => 'App\\Controller\\AnnoncesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'annonces_client_new', '_controller' => 'App\\Controller\\AnnoncesClient\\AnnoncesClientController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'annonces_client', '_controller' => 'App\\Controller\\AnnoncesClient\\AnnoncesClientController::index'], [], null, null, false, false, null]],
        349 => [[['_route' => 'annonces_all', '_controller' => 'App\\Controller\\AnnoncesAll\\AnnoncesAllController::index'], [], null, null, false, false, null]],
        381 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [
            [['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
