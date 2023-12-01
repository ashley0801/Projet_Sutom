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
        '/admin/word' => [[['_route' => 'admin_word', '_controller' => 'App\\Controller\\AdminControler::setWordOfTheDay'], null, null, null, false, false, null]],
        '/calendar' => [
            [['_route' => 'app_calendar', '_controller' => 'App\\Controller\\CalendarController::showCalendar'], null, null, null, false, false, null],
            [['_route' => 'welcome', '_controller' => 'App\\Controller\\DefaultController::login'], null, null, null, false, false, null],
        ],
        '/friends' => [[['_route' => 'app_friends', '_controller' => 'App\\Controller\\FriendController::showFriends'], null, null, null, false, false, null]],
        '/add-friend' => [[['_route' => 'app_add_friend', '_controller' => 'App\\Controller\\FriendController::addFriend'], null, null, null, false, false, null]],
        '/pending-friend-requests' => [[['_route' => 'app_pending_friend_requests', '_controller' => 'App\\Controller\\FriendController::pendingFriendRequests'], null, null, null, false, false, null]],
        '/gestion-profil' => [[['_route' => 'gestion_profil', '_controller' => 'App\\Controller\\GestionController::gestionProfil'], null, null, null, false, false, null]],
        '/modification-profil' => [[['_route' => 'modification_profil', '_controller' => 'App\\Controller\\GestionController::modificationProfil'], null, null, null, false, false, null]],
        '/delete-account' => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\GestionController::deleteAccount'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/accept\\-friend\\-request/([^/]++)(*:202)'
                .'|/decline\\-friend\\-request/([^/]++)(*:244)'
                .'|/game/([^/]++)(*:266)'
                .'|/congratulations/([^/]++)(*:299)'
                .'|/lost/([^/]++)(*:321)'
                .'|/user/avatar/([^/]++)(*:350)'
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
        202 => [[['_route' => 'app_accept_friend_request', '_controller' => 'App\\Controller\\FriendController::acceptFriendRequest'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'app_decline_friend_request', '_controller' => 'App\\Controller\\FriendController::declineFriendRequest'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::index'], ['date'], null, null, false, true, null]],
        299 => [[['_route' => 'congratulations', '_controller' => 'App\\Controller\\GameController::congratulations'], ['date'], null, null, false, true, null]],
        321 => [[['_route' => 'lost', '_controller' => 'App\\Controller\\GameController::lost'], ['date'], null, null, false, true, null]],
        350 => [
            [['_route' => 'user_avatar', '_controller' => 'App\\Controller\\GestionController::userAvatar'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
