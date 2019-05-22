<?php
global $routes;
$routes = array();

$routes['/users/login'] = '/users/login'; /*(POST)*/
$routes['/users/new'] = '/users/new_record'; /*(POST)*/
$routes['/users/feed'] = '/users/feed'; /*(GET)*/
$routes['/users/{id}'] = '/users/view/:id'; /*(GET) (POST) (PUT)*/
$routes['/users/{id}/photos'] = '/users/photos/:id'; /*(GET)*/
$routes['/users/{id}/follow'] = '/users/follow/:id'; /*(POST) (DELETE)*/

$routes['/photos/random'] = '/photos/random'; /*(GET)*/
$routes['/photos/new'] = '/photos/new_record'; /*(POST)*/
$routes['/photos/{id}'] = '/photos/view/:id'; /*(GET) (DELETE)*/
$routes['/photos/{id}/comment'] = '/photos/comment/:id'; /*(POST) (DELETE)*/
$routes['/photos/{id}/like'] = '/photos/like/:id'; /*(POST) (DELETE)*/

$routes['/comments/{id}'] = '/photos/delete_comment/:id';