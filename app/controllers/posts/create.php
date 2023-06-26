<?php 

// if (!check_auth()) {
//     redirect('/');
// }

$title = 'New post';
$recent_posts = db()->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/create.tpl.php';