<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

// Road to get names list
$router->get(
    '/names', // endpoint
    [
        'uses' => 'NameController@list', 
        'as'   => 'names-list'
    ]
);
// Road to post new name from frontend
$router->post(
    '/names', 
    [
        'uses' => 'NameController@add',
        'as'   => 'names-add'
    ]
);