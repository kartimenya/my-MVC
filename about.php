<?php 
  $post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ut neque deserunt
  labore minima rerum perspiciatis ea blanditiis natus debitis, iste quam sint
  reprehenderit sunt, praesentium molestiae veritatis, voluptas ad.';

  $recent_posts = [
    1 => [
      'title' => 'An item',
      'slug' => lcfirst(str_replace(' ', '-', 'An item')) ,
    ],
    2 => [
      'title' => 'A second item',
      'slug' => lcfirst(str_replace(' ', '-', 'A second item')) ,
    ],
    3 => [
      'title' => 'A third item',
      'slug' => lcfirst(str_replace(' ', '-', 'A third item')) ,
    ],
    4 => [
      'title' => 'A fourth item',
      'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')) ,
    ],
    5 => [
      'title' => 'And a fifth one',
      'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')) ,
    ],
  ];

  require_once 'about.tpl.php';


