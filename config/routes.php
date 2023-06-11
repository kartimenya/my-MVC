<?php

/** @var $router */
//Posts
$rooter->get('', 'posts/index.php');
$rooter->get('posts', 'posts/show.php');
$rooter->get('posts/create', 'posts/create.php');
$rooter->post('posts', 'posts/store.php');
$rooter->delete('posts', 'posts/destroy.php');

//pages
$rooter->get('about', 'about.php');
$rooter->get('contact', 'contact.php');

// $routes = [
//     '' => 'index.php',
//     'about' => 'about.php',
//     'post' => 'post.php',
//     'posts/create' => 'post-create.php',
// ];