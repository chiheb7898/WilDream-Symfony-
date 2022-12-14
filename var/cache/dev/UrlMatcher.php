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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\BlogController:index'], null, null, null, false, false, null],
        ],
        '/posts/user' => [[['_route' => 'user_posts', '_controller' => 'App\\Controller\\BlogController::renderUserPosts'], null, null, null, false, false, null]],
        '/addpost' => [[['_route' => 'addpost', '_controller' => 'App\\Controller\\BlogController::addpost'], null, null, null, false, false, null]],
        '/displayposts' => [[['_route' => 'display_posts', '_controller' => 'App\\Controller\\BlogController::desplayposts'], null, null, null, false, false, null]],
        '/deletePost' => [[['_route' => 'delete_post', '_controller' => 'App\\Controller\\BlogController::deletePost'], null, null, null, false, false, null]],
        '/detailspost' => [[['_route' => 'detailspost', '_controller' => 'App\\Controller\\BlogController::details'], null, null, null, false, false, null]],
        '/displaycomments' => [[['_route' => 'display_comments', '_controller' => 'App\\Controller\\BlogController::desplaycomments'], null, null, null, false, false, null]],
        '/addcomment' => [[['_route' => 'addcomment', '_controller' => 'App\\Controller\\BlogController::addcomment'], null, null, null, false, false, null]],
        '/deletecomment' => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\BlogController::deletecomment'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'comment_add', '_controller' => 'App\\Controller\\CommentsController::add'], null, null, null, false, false, null]],
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
                .'|/blog/([^/]++)(*:183)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [
            [['_route' => 'blogshow', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
