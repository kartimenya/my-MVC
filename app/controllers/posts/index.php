<?php
use core\Pagination;

$title = 'My Title';

/** @var \core\Db $db */

$db = \core\App::get(\core\Db::class);

$page = $_GET['page'] ?? 1;
$per_page = 3;
$total = $db->query("SELECT COUNT(*) FROM post")->getColum();
$pagination = new Pagination((int)$page, $per_page, $total);

$start = $pagination->getStart();
  
$posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT $start, $per_page")->findAll();
$recent_posts = db()->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/posts/index.tpl.php';


