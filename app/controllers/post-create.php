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
    if (empty(trim($data['title']))){
        $errors['title'] = 'Title is required';
    }
    if (empty(trim($data['content']))){
        $errors['content'] = 'Content is required';
    }
    if (empty(trim($data['excert']))){
        $errors['excert'] = 'Excert is required';
    }


    if (empty($errors)) {
        $db->query("INSERT INTO post (`title`, `content`, `excert`, `slug`) VALUES (?, ?, ?, ?)", [
            $_POST['title'],
            $_POST['content'],
            $_POST['excert'],
            $_POST['title'],
        ]);
    }  
}

require_once VIEWS . '/post-create.tpl.php';