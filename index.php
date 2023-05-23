<?php 

require_once 'funcs.php';

  $title = 'My Title';
  
  $posts = [
    1 => [
      'title' => 'title - 1',
      'desc' => 'With supporting text below as a natural lead-in to additional content.',
      'slug' => 'title - 1'
    ],
    2 => [
      'title' => 'title - 2',
      'desc' => 'With supporting text below as a natural lead-in to additional content.',
      'slug' => 'title - 2'
    ],
    3 => [
      'title' => 'title - 3',
      'desc' => 'With supporting text below as a natural lead-in to additional content.',
      'slug' => 'title - 3'
    ],
    4 => [
      'title' => 'title - 4',
      'desc' => 'With supporting text below as a natural lead-in to additional content.',
      'slug' => 'title - 4'
    ],
    5 => [
      'title' => 'title - 5',
      'desc' => 'With supporting text below as a natural lead-in to additional content.',
      'slug' => 'title - 5'
    ],
  ];

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

  require_once 'app/views/index.tpl.php';


