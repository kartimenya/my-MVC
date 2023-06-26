<?php

$title = 'My Title';
  
$posts = db()->query("SELECT * FROM post")->findAll();
$recent_posts = db()->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/index.tpl.php';


