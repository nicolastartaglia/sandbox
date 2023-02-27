<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/create/movie' => [[['_route' => 'app_create_movie', '_controller' => 'App\\Controller\\CreateMovieController::create'], null, null, null, false, false, null]],
        '/hello_b' => [[['_route' => 'app_hello2_world', '_controller' => 'App\\Controller\\Hello2WorldController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/list/movie' => [[['_route' => 'app_list_movie', '_controller' => 'App\\Controller\\ListMovieController::index'], null, null, null, false, false, null]],
        '/load/movies' => [[['_route' => 'app_load_movies', '_controller' => 'App\\Controller\\LoadMoviesController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/hello(?'
                    .'|(?:/([^/]++))?(*:30)'
                    .'|/world(*:43)'
                .')'
                .'|/show/movie/([^/]++)(*:71)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'hello', 'name' => 'nicolas', '_controller' => 'App\\Controller\\Hello2WorldController::afficheNom'], ['name'], null, null, false, true, null]],
        43 => [[['_route' => 'app_hello_world', '_controller' => 'App\\Controller\\HelloWorldController::index'], [], null, null, false, false, null]],
        71 => [
            [['_route' => 'app_show_movie', '_controller' => 'App\\Controller\\ShowMovieController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
