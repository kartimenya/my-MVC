<?php 

/**
* @var Db $db
**/

$title = 'My post';

$id = (int)$_GET['id'] ?? 0;
  
$post = $db->query("SELECT * FROM post WHERE id = ? LIMIT 1", [$id])->findOrFail();

require_once VIEWS . '/post.tpl.php';