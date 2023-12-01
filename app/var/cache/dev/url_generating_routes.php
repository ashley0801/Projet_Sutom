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
    'admin_word' => [[], ['_controller' => 'App\\Controller\\AdminControler::setWordOfTheDay'], [], [['text', '/admin/word']], [], [], []],
    'app_calendar' => [[], ['_controller' => 'App\\Controller\\CalendarController::showCalendar'], [], [['text', '/calendar']], [], [], []],
    'app_friends' => [[], ['_controller' => 'App\\Controller\\FriendController::showFriends'], [], [['text', '/friends']], [], [], []],
    'app_add_friend' => [[], ['_controller' => 'App\\Controller\\FriendController::addFriend'], [], [['text', '/add-friend']], [], [], []],
    'app_pending_friend_requests' => [[], ['_controller' => 'App\\Controller\\FriendController::pendingFriendRequests'], [], [['text', '/pending-friend-requests']], [], [], []],
    'app_accept_friend_request' => [['id'], ['_controller' => 'App\\Controller\\FriendController::acceptFriendRequest'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/accept-friend-request']], [], [], []],
    'app_decline_friend_request' => [['id'], ['_controller' => 'App\\Controller\\FriendController::declineFriendRequest'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/decline-friend-request']], [], [], []],
    'game' => [['date'], ['_controller' => 'App\\Controller\\GameController::index'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/game']], [], [], []],
    'congratulations' => [['date'], ['_controller' => 'App\\Controller\\GameController::congratulations'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/congratulations']], [], [], []],
    'lost' => [['date'], ['_controller' => 'App\\Controller\\GameController::lost'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/lost']], [], [], []],
    'gestion_profil' => [[], ['_controller' => 'App\\Controller\\GestionController::gestionProfil'], [], [['text', '/gestion-profil']], [], [], []],
    'user_avatar' => [['id'], ['_controller' => 'App\\Controller\\GestionController::userAvatar'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/avatar']], [], [], []],
    'modification_profil' => [[], ['_controller' => 'App\\Controller\\GestionController::modificationProfil'], [], [['text', '/modification-profil']], [], [], []],
    'delete_account' => [[], ['_controller' => 'App\\Controller\\GestionController::deleteAccount'], [], [['text', '/delete-account']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'welcome' => [[], ['_controller' => 'App\\Controller\\DefaultController::login'], [], [['text', '/calendar']], [], [], []],
];
