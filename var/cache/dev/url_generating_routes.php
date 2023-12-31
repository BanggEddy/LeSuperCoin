<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_acceuil_admin' => [[], ['_controller' => 'App\\Controller\\AcceuilAdminController::index'], [], [['text', '/acceuil/admin']], [], [], []],
    'app_acceuil_client' => [[], ['_controller' => 'App\\Controller\\AcceuilClientController::index'], [], [['text', '/acceuil/client']], [], [], []],
    'app_acceuil_index' => [[], ['_controller' => 'App\\Controller\\AcceuilController::index'], [], [['text', '/acceuil']], [], [], []],
    'app_acceuil_acceuil' => [[], ['_controller' => 'App\\Controller\\AcceuilController::acceuil'], [], [['text', '/']], [], [], []],
    'app_acceuil_acceuilclient' => [[], ['_controller' => 'App\\Controller\\AcceuilController::acceuilclient'], [], [['text', '/accueilclient']], [], [], []],
    'app_acceuil_acceuiladmin' => [[], ['_controller' => 'App\\Controller\\AcceuilController::acceuiladmin'], [], [['text', '/acceuiladmin']], [], [], []],
    'app_annonces_all_index' => [[], ['_controller' => 'App\\Controller\\AnnoncesAllController::index'], [], [['text', '/annonces/all/']], [], [], []],
    'app_annonces_all_new' => [[], ['_controller' => 'App\\Controller\\AnnoncesAllController::new'], [], [['text', '/annonces/all/new']], [], [], []],
    'app_annonces_all_show' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesAllController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/all']], [], [], []],
    'app_annonces_all_edit' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesAllController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/all']], [], [], []],
    'app_annonces_all_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesAllController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/all']], [], [], []],
    'app_annonces_client_index' => [[], ['_controller' => 'App\\Controller\\AnnoncesClientController::index'], [], [['text', '/annonces/client/']], [], [], []],
    'app_annonces_client_new' => [[], ['_controller' => 'App\\Controller\\AnnoncesClientController::new'], [], [['text', '/annonces/client/new']], [], [], []],
    'app_annonces_client_show' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/client']], [], [], []],
    'app_annonces_client_edit' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/client']], [], [], []],
    'app_annonces_client_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesClientController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces/client']], [], [], []],
    'app_annonces_index' => [[], ['_controller' => 'App\\Controller\\AnnoncesController::index'], [], [['text', '/annonces/']], [], [], []],
    'app_annonces_new' => [[], ['_controller' => 'App\\Controller\\AnnoncesController::new'], [], [['text', '/annonces/new']], [], [], []],
    'app_annonces_show' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_annonces_edit' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_annonces_delete' => [['id'], ['_controller' => 'App\\Controller\\AnnoncesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annonces']], [], [], []],
    'app_categories_index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories/']], [], [], []],
    'app_categories_new' => [[], ['_controller' => 'App\\Controller\\CategoriesController::new'], [], [['text', '/categories/new']], [], [], []],
    'app_categories_show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_contact_client' => [[], ['_controller' => 'App\\Controller\\ContactClientController::index'], [], [['text', '/contact/client']], [], [], []],
    'app_contact_index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_contact_contactclient' => [[], ['_controller' => 'App\\Controller\\ContactController::contactclient'], [], [['text', '/contactclient']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'acceuil' => [[], ['_controller' => 'App\\Controller\\Acceuil\\AcceuilController::index'], [], [['text', '/acceuil']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuil'], [], [['text', '/']], [], [], []],
    'accueilclient' => [[], ['_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuilclient'], [], [['text', '/accueilclient']], [], [], []],
    'acceuiladmin' => [[], ['_controller' => 'App\\Controller\\Acceuil\\AcceuilController::acceuiladmin'], [], [['text', '/acceuiladmin']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\Contact\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'contactclient' => [[], ['_controller' => 'App\\Controller\\Contact\\ContactController::contact/client'], [], [['text', '/contactclient']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'security_login' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], [], [['text', '/login']], [], [], []],
    'security_logout' => [[], [], [], [['text', '/logout']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'annonces_client_new' => [[], ['_controller' => 'App\\Controller\\AnnoncesClient\\AnnoncesClientController::new'], [], [['text', '/annonces/client/new']], [], [], []],
    'annonces_client' => [[], ['_controller' => 'App\\Controller\\AnnoncesClient\\AnnoncesClientController::index'], [], [['text', '/annonces/client']], [], [], []],
    'annonces_all' => [[], ['_controller' => 'App\\Controller\\AnnoncesAll\\AnnoncesAllController::index'], [], [['text', '/annonces/all']], [], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\Categories\\CategoriesController::index'], [], [['text', '/categories']], [], [], []],
    'annonces' => [[], ['_controller' => 'App\\Controller\\Annonces\\AnnoncesController::index'], [], [['text', '/annonces']], [], [], []],
];
