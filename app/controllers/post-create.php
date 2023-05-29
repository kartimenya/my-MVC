<?php 

/**
* @var Db $db
**/

$title = 'New post';

$recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'content', 'excert'];
    $data = load($fillable);

    //validation
    $errors = [];
    if (empty($data['title'])){
        $errors['title'] = 'Title is required';
    }
    if (empty($data['content'])){
        $errors['content'] = 'Content is required';
    }
    if (empty($data['excert'])){
        $errors['excert'] = 'Excert is required';
    }


    if (empty($errors)) {
        if ($db->query("INSERT INTO post (`title`, `content`, `excert`, `slug`) VALUES (:title, :content, :excert, :title)",$data)) {
            echo 'ok';
        } else {
            echo 'DB_ERROR';
        }
        
        // redirect('/posts/create');
    }  
}

require_once VIEWS . '/post-create.tpl.php';