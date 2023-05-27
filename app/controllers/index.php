<?php 

  $title = 'My Title';
  
  $posts = $db->query("SELECT * FROM post")->fetchAll();
  $recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->fetchAll();

  require_once VIEWS . '/index.tpl.php';


