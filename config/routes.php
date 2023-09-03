<?php

/** @var $router */

const MIDDLEWARE = [
    'auth' => \core\middleware\Auth::class,
    'guest' => \core\middleware\Guest::class,
];

//Posts
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php')->only('auth');
$router->post('posts', 'posts/store.php');
$router->delete('posts', 'posts/destroy.php');

//pages
$router->get('about', 'about.php');
$router->get('contact', 'contact.php');

// User
$router->get('register', 'users/register.php')->only('guest');
$router->post('register', 'users/store.php')->only('guest');
$router->get('login', 'users/login.php')->only('guest');
$router->get('logout', 'users/logout.php');