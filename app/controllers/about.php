<?php

$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ut neque deserunt
  labore minima rerum perspiciatis ea blanditiis natus debitis, iste quam sint
  reprehenderit sunt, praesentium molestiae veritatis, voluptas ad.';

$recent_posts = db()->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();


require_once VIEWS . '/about.tpl.php';


